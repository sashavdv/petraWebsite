@extends('layouts.app')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="parking">
        <div class="ui container">
            <h1>@lang('titles.parking')</h1>
            <p>@lang('content.parking')</p>
            <div class="ui list">
                <div class="item">
                    @lang('content.parking-free'):
                    <a href="https://www.hasselt.be/nl/gratisparkeren" target="_blank">https://www.hasselt.be/nl/gratisparkeren</a>
                </div>
                <div class="item">
                    @lang('content.parking-paid'):
                    <a href="https://www.hasselt.be/nl/betaald-parkeren" target="_blank">https://www.hasselt.be/nl/betaald-parkeren</a>
                    <small>*@lang('content.parking-disclaimer')</small>
                </div>
            </div>
        </div>
    </section>

    <div class="ui divider"></div>

    <section id="location">
        <div class="ui container">
            <h1>@lang('titles.location')</h1>
            <div class="ui list">
                <div class="item">Grote Markt 18 bus 3/04</div>
                <div class="item">3500 Hasselt</div>
            </div>
            <div class="ui card" style="max-width: 100%; min-width: 100%;">
                <div id="map"></div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <script type="text/javascript">
        var map = L.map('map').setView([50.929189,5.3375989], 18);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([50.929189,5.3375989]).addTo(map)
            .bindPopup('Grote Markt 18 bus 3/04,<br>3500 Hasselt')
            .openPopup();

        map.addControl(new L.Control.Fullscreen());
    </script>
@endsection