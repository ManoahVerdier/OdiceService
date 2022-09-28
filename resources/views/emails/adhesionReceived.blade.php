<p>
    Bonjour,
</p> 
<p>
    Une demande d'adhésion OdiceService+ a été effectuée. Voici les informations recueillies : 
</p>
<p style="margin-bottom:3px !important; margin-top:0px!important; padding:0px !important"><b>Nom</b> : {{ $request["name"] }}</p>
<p style="margin-bottom:3px !important; margin-top:0px!important; padding:0px !important"><b>Email</b> : {{ $request["email"] }}</p>
<p style="margin-bottom:3px !important; margin-top:0px!important; padding:0px !important"><b>Téléphone</b> : {{ $request["phone"] }}</p>
<p style="margin-bottom:3px !important; margin-top:0px!important; padding:0px !important"><b>Nombre d'appareils total</b> : {{ $request["nbAppTot"] }}</p>
<p style="margin-bottom:3px !important; margin-top:0px!important; padding:0px !important"><b>Nombre d'univers différents</b> : {{ $request["nbUnivers"] }}</p>
<p style="margin-bottom:3px !important; margin-top:0px!important; padding:0px !important"><b>Formule retenue</b> : {{ $request["formule"] }}</p>
<p style="margin-bottom:3px !important; margin-top:0px!important; padding:0px !important"><b>Coût validé</b> : {{ $request["prix"] }}</p>
<p style="margin-bottom:10px !important; margin-top:0px!important; padding:0px !important"><b>Liste des appareils</b> :</p>

@if($request->nbChaud>0)
    <p style="margin-left:30px;margin-top:0px !important; margin-bottom:10px !important"><i>Chaud</i></p>
    @foreach($request["nbApp"]["chaud"] as $id=>$nb)
        @if($nb>0)
            <p style="margin-left:60px; margin-top:0px !important; margin-bottom:0px !important;">{{  $chaud[$id]." : ".$nb }}</p>
        @endif
    @endforeach
@endif
@if($request->nbFroid>0)
    <p style="margin-left:30px;margin-top:10px !important; margin-bottom:10px !important"><i>Froid</i></p>
    @foreach($request["nbApp"]["froid"] as $id=>$nb)
        @if($nb>0)
            <p style="margin-left:60px; margin-top:0px !important; margin-bottom:0px !important;">{{  $froid[$id]." : ".$nb }}</p>
        @endif
    @endforeach
@endif
@if($request->nbAutres>0)
    <p style="margin-left:30px;margin-top:10px !important; margin-bottom:10px !important"><i>Prêt à brancher</i></p>
    @foreach($request["nbApp"]["autres"] as $id=>$nb)
        @if($nb>0)
            <p style="margin-left:60px; margin-top:0px !important; margin-bottom:0px !important;">{{  $autres[$id]." : ".$nb }}</p>
        @endif
    @endforeach
@endif

<p></p>
<p> Bonne journée</p>