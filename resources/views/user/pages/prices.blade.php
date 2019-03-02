@extends('layouts.app')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>

    <style>
        .text.light {
            opacity: .6;
            font-size: 1rem;
        }
    </style>

    <section id="beauty">
        <div class="ui container">
            <div class="ui fluid card">
                <div class="content">
                    <div class="header">
                        BEAUTY, de magie van verzorging, ondersteuning, ontgifting en aanraking geeft onze huid werkzame
                        impulsen en diepe ontspanning. De resultaten zijn direct voelbaar & waarneembaar.
                    </div>
                    <div class="description">
                        <b>Gelaat</b>
                        <div class="ui accordion">
                            <div class="title">
                                <div>
                                    Dr. Hauschka Klassieke Behandeling - 95€ * min.120 minuten<br>
                                    Dr. Hauschka Klassieke Behandeling+ - 125€ * min.150 minuten
                                </div>
                            </div>
                            <div class="content">
                                <p>
                                    Gun jezelf een hele speciale korte vakantie.
                                    Een heerlijk voetenbad, het uitstrijken van je handen en armen in combinatie met
                                    geurige kompressen laten jou ontspannen.
                                    Dit vormt de ideale voorbereiding op de aansluitende gezichtsbehandeling bestaande
                                    uit reinigende en verzorgende maskers en een intensieve verzorging met een
                                    regenererende ampullen kuur.
                                    Het belangrijkste deel van de Klassieke behandeling is de daarop volgende
                                    penseelmassage. Deze bevordert de stroming van lymfe, voert afvalstoffen af en
                                    versterkt het immuunsysteem.
                                    De Klassieke Dr. Hauschka behandeling geeft een doorstroomd en weldadig gevoel, een
                                    gevoel van lichtheid en innerlijke balans. De behandeling pakt tevens gevoelige
                                    zenuwen aan.
                                    De producten zelf, kennen een homeopatische basis. Ook vandaag nog maakt een
                                    tijdrovend ritmisch extractieprocedé deel uit van het productieproces van dit zalig
                                    geurend en gezond gamma.
                                    Natuurlijke stoffen worden hiervoor hiervoor blootgesteld aan de wisselende
                                    invloeden van warmte en kou, duisternis en licht, rust en beweging.
                                    De kracht van de natuur en de werking van deze heilzame planten bewaren daarom
                                    zonder conserveringsmiddel.
                                    Elk product is een gecomponeerde symfonie op zich, deze natuurzuivere cosmetica
                                    draagt daarom bij aan uw innerlijk evenwicht.
                                    Je geurbeleving is subtiel en verfijnd.<br>
                                    Onze huid vernieuwt zich om de 28 dagen in samenwerking met ons gehele lichaam, onze
                                    geest en onze ziel.
                                    De Dr. Hauschka behandeling ondersteunt dit ritmisch proces, van binnen naar buiten
                                    & van buiten naar binnen.
                                    Centraal staat altijd de gehele mens, reinigen, versterken en verzorgen
                                </p>
                                <p class="text light">
                                    Concreet:
                                    Voetenbad met intake,
                                    Beeneffleurage met lichte voetmassage,
                                    Energetisch uitstrijken van haren,
                                    Armen en schouders losmaken,
                                    Armeffleurage met lichte handmassage,
                                    Reininging van de huid,
                                    Dieptereiniging van de huid,
                                    Huidbeeld analyse,
                                    Versterken van de huid,
                                    Gezichtssauna,
                                    Reinigend kleimasker,
                                    Ontgiftende lymfestimulatie met penselen en handen,
                                    Helende ampullen/conditioners,
                                    Verzorgend masker met oogmasker,
                                    Manuele decolleté massage met bodyolie,
                                    Dagverzorging: dagcreme, oogcreme, eventuele halscreme,
                                    Uitrekking lichaam en ademhalingsoefening,
                                    Thee
                                </p>
                            </div>
                        </div>
                        <div class="ui accordion">
                            <div class="title">
                                <div>
                                    Aromabehandeling - 75€ * min.60 minuten<br>
                                    Aromabehandeling+ - 105 * min.90 minuten
                                </div>
                            </div>
                            <div class="content">
                                <p>
                                    Daar waar de Klassieke Dr. Hauschka behandeling eigenlijk alles behalve klassiek is,
                                    is deze gelaatsbehandeling wel een klassieker in zijn patroon.
                                    Daar waar bij Dr. Hauscka de klemtoon ligt op lyfme, ontgiften en streelzachte
                                    homeopathie, volgen we hier een vertrouwd patroon van reinigen, zacht peelen, serum,
                                    spiermassage en een masker.
                                    We werken voornamelijk met neutrale basisproducten die we aanvullen en mengen met
                                    draagoliën en essentiële oliën.
                                    Essentiële oliën gaan door de Reinse barrière van de huid heen en kunnen zo tot diep
                                    in de levende cellenlaag hun werk doen. Eigenlijk spreken we dus over cosmeceutica
                                    in plaats van cosmetica.
                                    Deze verzorging is een ware geurbeleving en kan als fytotherapie in combinatie met
                                    aromatherapie beschreven worden.
                                    Heb je niet zo veel tijd maar wil je toch genieten en jezelf degelijk verzorgen, dan
                                    biedt deze gelaatsverzorging jou het antwoord.
                                </p>
                                <p class="text light">
                                    Concreet:
                                    Voetenbad met intake,
                                    Reiniging van de huid,
                                    Huidanalyse,
                                    Dieptereiniging van de huid,
                                    Serum,
                                    Stofwisselingsmassage,
                                    Reinigend of verzorgend masker,
                                    Dagverzorging: dagcrème, oogserum
                                </p>
                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <b>Lichaam</b>
                    </div>
                </div>
                <div class="extra content">
                    + staat bij de gelaatsbehandelingen voor de all-in formule, waarbij je naar keuze je diverse
                    gelaatsepilaties uitkiest en eventueel nog combineert met het verven van je wenkbrauwen en/of
                    wimpers.<br>
                    ->Deze optie kan ook separaat geboekt worden.
                    Dit is aangewezen wanneer je uitsluitend het esthetisch aspect van je gelaat, een touch-up wilt
                    geven.
                    Ook als je wilt door-genieten van een gelaatsverzorging zonder onderbrekingen, kan je dit pakket
                    separaat boeken.<br>
                    Esthetisch ‘+’ pakket: gelaatsepilaties naar keuze in combinatie met het (eventueel) verven van
                    wenkbrauwen en/of wimpers. 30€
                </div>
            </div>
        </div>
    </section>
@endsection
