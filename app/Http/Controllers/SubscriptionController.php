<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AdhesionReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use \PhpOffice\PhpWord\TemplateProcessor;
use \Aspose\Words\WordsApi;

class SubscriptionController extends Controller
{
    public AdhesionReceived $adhesion_received;

    public $chaud = array();

    public $froid = array();

    public $autres = array();

    public function __construct(){
        
        if (($open = fopen(storage_path() . "/app/materiel.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, null,";")) !== FALSE) {
                $data = array_map("utf8_encode", $data);
                if($data[1] ?? false){
                    switch($data[1]){
                        case 1 : $this->chaud[] = $data[0]; break;
                        case 2 : $this->froid[] = $data[0]; break;
                        case 3 : $this->autres[] = $data[0]; break;
                    }
                }
            }

            fclose($open);
        } 

    }

    public function homepage(Request $request){
        return view("welcome", ["chaud"=>$this->chaud,"froid"=>$this->froid,"autres"=>$this->autres]);
    }

    public function prepareStore(Request $request){
        $this->createWordFiles($request);
        $this->createPdfFiles("docs/ContratOdiceService");
        $link = $this->makeSignature($request);
        session(['attributes' => $request->all()]);
        return Redirect::to($link);
    }

    public function store(Request $request){
        $this->downloadSignedDocument($request->signature_request_id);
        $notification = new AdhesionReceived(session('attributes'),$this->chaud,$this->froid,$this->autres);
        Mail::to("verdier.developpement@gmail.com")->send($notification);
        Mail::to("vmogenet@cyn-communication.fr")->send($notification);
        return view('welcome');
    }

    public function createWordFiles(Request $request){
        $date = Carbon::now();
        $templateProcessor = new TemplateProcessor('docs/Modèle Odice Service.docx');
        $templateProcessor->setValue("NomClient",$request["first_name"]." ".$request["last_name"]);
        $templateProcessor->setValue("Tel",$request["phone"]);
        $templateProcessor->setValue("Email",$request["email"]);
        switch($request["formule"]){
            case 1 : $templateProcessor->setValue("Type","Silver"   );break;
            case 2 : $templateProcessor->setValue("Type","Gold"     );break;
            case 3 : $templateProcessor->setValue("Type","Platinium");break;
        }
        
        $templateProcessor->setValue("Prix",$request["prix"]);
        $templateProcessor->setValue("Date",$date->locale("fr_Fr")->isoFormat("DD/MM/YYYY"));
        
        
        $appValues = [];
        if($request->nbChaud>0) {
        
            foreach($request["nbApp"]["chaud"] as $id=>$nb) {
                if($nb>0){
                    $appValues[] = ['Materiel'=>$this->chaud[$id], "Qte"=>$nb, "Categ"=>"Chaud"];
                }
            }
        }

        if($request->nbFroid>0) {
        
            foreach($request["nbApp"]["froid"] as $id=>$nb) {
                if($nb>0){
                    $appValues[] = ['Materiel'=>$this->froid[$id], "Qte"=>$nb, "Categ"=>"Froid"];
                }
            }
        }

        if($request->nbAutres>0) {
        
            foreach($request["nbApp"]["autres"] as $id=>$nb) {
                if($nb>0){
                    $appValues[] = ['Materiel'=>$this->autres[$id], "Qte"=>$nb, "Categ"=>"Prêt à brancher"];
                }
            }
        }
        

        $templateProcessor->cloneRowAndSetValues('Materiel', $appValues);
        $templateProcessor->saveAs("docs/ContratOdiceService.docx");$date = Carbon::now();
    }

    public function createPdfFiles($path){
        $clientId = env("ASPOSE_ID");//"328f7eaf-3baf-42bb-bfe8-0999d4a9ba38";
        $clientSecret=env("ASPOSE_SECRET");//"3f4e34cef1c084fefe8e8398beeea913";
        $api = new WordsApi($clientId, $clientSecret);
        $format = "pdf";
        $file = ($path.".docx");
        $request = new \Aspose\Words\Model\Requests\ConvertDocumentRequest($file, $format,null);
        $result = $api->ConvertDocument($request);	
        copy($result->getPathName(),"docs/OdiceService_ContratNonSigne.pdf");
    }

    public function makeSignature(Request $request){
        
        try{
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://api-sandbox.yousign.app/v3/documents', [
            'multipart' => [
                [
                    'name' => 'file',
                    'filename' => 'ContratOdiceService.pdf',
                    'contents' => file_get_contents('docs/ContratOdiceService.pdf'),
                    'headers' => [
                            'Content-Type' => 'application/pdf'
                    ]

                ],
                [
                    'name' => 'nature',
                    'contents' => 'signable_document'
                ],
                [
                    'name' => 'parse_anchors',
                    'contents' => 'true'
                ]
                ],
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer '.env("YOUSIGN_SECRET"),
            ],
            ]);
            
            $idDoc = json_decode($response->getBody())->id;
            $phone = $request["phone"];
            if(substr($phone,0,1)=="0"){
                $phone="+33".substr($phone,1,9);
            }
            
            $client = new \GuzzleHttp\Client();
            $signer = new \stdClass();
            $signer->info = new \stdClass();
            $signer->info->first_name=$request["first_name"];;
            $signer->info->last_name=$request["last_name"];
            $signer->info->email=$request["email"];
            $signer->info->locale="fr";
            $signer->info->phone_number=$phone;
            $signer->signature_authentication_mode="otp_email";
            $signer->redirect_urls = new \stdClass();
            $signer->redirect_urls->success=env("APP_URL")."/subscriptionComplete";
            $post = new \stdClass();
            $post->name = "Signature contrat Odice Service +";
            $post->delivery_mode="none";
            $post->documents = [$idDoc];
            $post->signers = [
                $signer
            ];
            $response = $client->request('POST', 'https://api-sandbox.yousign.app/v3/signature_requests', [
                'body' => 
                    json_encode($post),
                'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer '.env("YOUSIGN_SECRET"),
                'content-type' => 'application/json'
                ]
            ]);
            
            $idRequest = json_decode($response->getBody())->id;

            $response = $client->request('POST', 'https://api-sandbox.yousign.app/v3/signature_requests/'.$idRequest.'/activate', [
                'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer '.env("YOUSIGN_SECRET"),
                ],
            ]);
            
            $link = json_decode($response->getBody())->signers[0]->signature_link;

            return $link;
        } catch (\GuzzleHttp\Exception\ClientException $e){
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();

            dd($response, $responseBodyAsString);
        }
    }

    public function downloadSignedDocument($signatureId){
        $pdfFilePath = 'docs/OdiceService_ContratSigne.pdf'; // specify your path
        $pdfFileResource = fopen($pdfFilePath, 'w+');
        $client = new \GuzzleHttp\Client();
        $client->request('GET', 'https://api-sandbox.yousign.app/v3/signature_requests/'.$signatureId.'/documents/download', [
            'headers' => [
              'accept' => 'application/zip, application/pdf',
              'authorization' => 'Bearer '.env("YOUSIGN_SECRET"),
            ],
            'sink'=>$pdfFileResource
          ]
        );
    }
}
