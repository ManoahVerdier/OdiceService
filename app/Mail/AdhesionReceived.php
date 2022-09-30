<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Carbon\Carbon;
use \PhpOffice\PhpWord\TemplateProcessor;
use \PhpOffice\PhpWord\IOFactory;
use \PhpOffice\PhpWord\Settings;

class AdhesionReceived extends Mailable
{
    use Queueable, SerializesModels;

    public Request $request;
    public $chaud = array(
        "Simple service gaz",
        "4 feux vifs sur neutre",
        "2 feux vifs sur neutre",
        "Plaque coup de feu sur four gaz",
        "Plaque coup de feu gaz sur neutre",
        "grillade snack simple gaz",
        "grillade snack double gaz",
        "friteuse gaz 1 bac"
    );

    public $froid = array(
        "Armoire froide 1 ou 2  portes",
        "Armoire à chariots",
        "Cellule à grilles",
        "Cellule à chariots",
        "Chambre froide positive",
        "Chambre froide négative",
        "Meuble bas, tours, meubles self ",
        "Vitrine de self",
        "Gondole self service"
    );

    public $autres = array(
        "Cutter/ Blender",
        "Armoire à couteux",
        "désinsectiseur",
        "Laminoir",
        "Ouvre boites",
        "Bermixer / kitchened",
        "Girafe broyeur",
        "Coupe legumes"
    );

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request=$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $date = Carbon::now();
        $templateProcessor = new TemplateProcessor('docs/Modèle Odice Service.docx');
        $templateProcessor->setValue("NomClient",$this->request["name"]);
        $templateProcessor->setValue("Tel",$this->request["phone"]);
        $templateProcessor->setValue("Email",$this->request["email"]);
        switch($this->request["formule"]){
            case 1 : $templateProcessor->setValue("Type","Silver"   );break;
            case 2 : $templateProcessor->setValue("Type","Gold"     );break;
            case 3 : $templateProcessor->setValue("Type","Platinium");break;
        }
        
        $templateProcessor->setValue("Prix",$this->request["prix"]);
        $templateProcessor->setValue("Date",$date->locale("fr_Fr")->isoFormat("DD/MM/YYYY"));
        
        
        $appValues = [];
        if($this->request->nbChaud>0) {
        
            foreach($this->request["nbApp"]["chaud"] as $id=>$nb) {
                if($nb>0){
                    $appValues[] = ['Materiel'=>$this->chaud[$id], "Qte"=>$nb];
                }
            }
        }

        if($this->request->nbFroid>0) {
        
            foreach($this->request["nbApp"]["froid"] as $id=>$nb) {
                if($nb>0){
                    $appValues[] = ['Materiel'=>$this->froid[$id], "Qte"=>$nb];
                }
            }
        }

        if($this->request->nbAutres>0) {
        
            foreach($this->request["nbApp"]["autres"] as $id=>$nb) {
                if($nb>0){
                    $appValues[] = ['Materiel'=>$this->autres[$id], "Qte"=>$nb];
                }
            }
        }
        

        $templateProcessor->cloneRowAndSetValues('Materiel', $appValues);
        $templateProcessor->saveAs("docs/ContratOdiceService.docx");

        /*define('PHPWORD_BASE_DIR', realpath(__DIR__));
        $domPdfPath = base_path( 'vendor/mpdf/mpdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('MPDF');

        $phpWord= IOFactory::load("docs/ContratOdiceService.docx");
        $writer = IOFactory::createWriter($phpWord,'PDF');

        $writer->save("docs/ContratOdiceService.pdf");*/

        $this->toPdf("docs/ContratOdiceService");

        return $this->from('contact@odice.info', 'Odice Service +')
                ->subject("Nouvelle demande d'adhésion Odice Service +")
                ->view('emails.adhesionReceived')
                ->attach('docs/ContratOdiceService.docx')
                ->attach('docs/ContratOdiceService.pdf');

        
    }

    public function toPdf($path){
        $clientId = env("ASPOSE_ID");//"328f7eaf-3baf-42bb-bfe8-0999d4a9ba38";
        $clientSecret=env("ASPOSE_SECRET");//"3f4e34cef1c084fefe8e8398beeea913";
        $api = new \Aspose\Words\WordsAPI($clientId, $clientSecret);
        $format = "pdf";
        $file = ($path.".docx");
        $request = new \Aspose\Words\Model\Requests\ConvertDocumentRequest($file, $format,null);
        $result = $api->ConvertDocument($request);	
        copy($result->getPathName(),$path.".pdf");
    }
}
