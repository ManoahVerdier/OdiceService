<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

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
        return $this->from('contact@odice.info', 'Odice Service +')
                ->subject("Nouvelle demande d'adhésion Odice Service +")
                ->view('emails.adhesionReceived');
        //return $this->view('view.name');
    }
}
