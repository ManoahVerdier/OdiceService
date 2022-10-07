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

    public $request;
    

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
        
        return $this->from('contact@odice.info', 'Odice Service +')
                ->subject("Nouvelle demande d'adhésion Odice Service +")
                ->view('emails.adhesionReceived')
                ->attach('docs/OdiceService_ContratSigne.pdf')
                ->attach('docs/OdiceService_ContratNonSigne.pdf')
                ->attach('docs/ContratOdiceService.docx');

        
    }

    public function toPdf($path){
        $clientId = env("ASPOSE_ID");//"328f7eaf-3baf-42bb-bfe8-0999d4a9ba38";
        $clientSecret=env("ASPOSE_SECRET");//"3f4e34cef1c084fefe8e8398beeea913";
        $api = new \Aspose\Words\WordsAPI($clientId, $clientSecret);
        $format = "pdf";
        $file = ($path.".docx");
        $request = new \Aspose\Words\Model\Requests\ConvertDocumentRequest($file, $format,null);
        $result = $api->ConvertDocument($request);	
        copy($result->getPathName(),"OdiceService_ContratNonSigne.pdf");
    }
}
