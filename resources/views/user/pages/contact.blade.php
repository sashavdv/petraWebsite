@extends('layouts.app')
@section('content')
    <h1>@lang('titles.contact')</h1>
    <h1>Parking</h1>
    <h1>Maps</h1>
    <div class="container">
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([50.887096, 5.533177], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([50.887096, 5.533177]).addTo(map)
                .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                .openPopup();
        </script>
        <style>
            #map { height: 500px; }
        </style>
    </div>
    <h1>Inschrijfformulier</h1>
    {{ Form::open(['action' => 'ContactController@sendMail', 'method' => 'post']) }}
    {{ Form::label('first-name', 'Voornaam') }}
    {{ Form::text('first-name', '', ['class' => 'form-control']) }}
    {{ Form::label('last-name', 'Achternaam') }}
    {{ Form::text('last-name', '', ['class' => 'form-control']) }}
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', '', ['class' => 'form-control']) }}
    {{ Form::checkBox('Verzenden', true, true) }}
    {{ Form::label('subscribe', 'Ik wil e-mails ontvangen') }}
    {{ Form::submit('Inschrijven', ['class' => 'form-control']) }}
    {{ Form::close() }}
@endsection