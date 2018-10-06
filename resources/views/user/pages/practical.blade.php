@extends('layouts.app-new')
@section('content')
    <section id="parking">
        <h2>Parkeren in hasselt</h2>
        <p>Hier vindt u de mogelijke parkeerplaatsen in de regio hasselt.</p>
        <ul>
            <li>
                <span>Gratis:</span>
                <a href="https://www.hasselt.be/nl/gratisparkeren" target="_blank">https://www.hasselt.be/nl/gratisparkeren</a>
            </li>
            <li>
                <span>Betalend:</span>
                <a href="https://www.hasselt.be/nl/betaald-parkeren" target="_blank">https://www.hasselt.be/nl/betaald-parkeren</a>
                <small>*Tarieven kunnen in de loop van het jaar verandern. Informeer u zeker op voorhand.</small>
            </li>
        </ul>
    </section>
    <section id="location">
        <div id="map"></div>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
    <style>
        #map {
            height: 500px;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <script type="text/javascript">
        var map = L.map('map').setView([50.935658, 5.328598], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([50.935658, 5.328598]).addTo(map)
            .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            .openPopup();

        map.addControl(new L.Control.Fullscreen());
    </script>
@endsection