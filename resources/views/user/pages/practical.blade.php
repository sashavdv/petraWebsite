@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="parking">
        <div class="container">
            <h1>@lang('titles.parking')</h1>
            <p>@lang('content.parking')</p>
            <p></p>
            <ul>
                <li>
                    <span>@lang('content.parking-free'):</span>
                    <a href="https://www.hasselt.be/nl/gratisparkeren" target="_blank">https://www.hasselt.be/nl/gratisparkeren</a>
                </li>
                <li>
                    <span>@lang('content.parking-paid'):</span>
                    <a href="https://www.hasselt.be/nl/betaald-parkeren" target="_blank">https://www.hasselt.be/nl/betaald-parkeren</a>
                    <small>*@lang('content.parking-disclaimer')</small>
                </li>
            </ul>
        </div>
    </section>
    <section id="location">
        <div class="container">
            <h1>@lang('titles.location')</h1>
            <ul>
                <li>Grote Markt 18</li>
                <li>3500 Hasselt</li>
            </ul>
            <div id="map"></div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <script type="text/javascript">
        var map = L.map('map').setView([50.929189,5.3375989], 18);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([50.929189,5.3375989]).addTo(map)
            .bindPopup('Grote markt 18,<br>3500 Hasselt')
            .openPopup();

        map.addControl(new L.Control.Fullscreen());
    </script>
@endsection