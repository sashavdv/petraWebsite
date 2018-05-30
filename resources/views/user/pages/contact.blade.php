@extends('layouts.app')
@section('content')
    <h1>@lang('titles.contact')</h1>
    <h1>@lang('titles.parking')</h1>
    <h1>@lang('titles.location')</h1>
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
    <h1>@lang('titles.subscribe')</h1>
    {{ Form::open(['action' => 'ContactController@sendMail', 'method' => 'post']) }}
    {{ Form::label('first-name', __('forms.first_name')) }}
    {{ Form::text('first-name', '', ['class' => 'form-control']) }}
    {{ Form::label('last-name', __('forms.last_name')) }}
    {{ Form::text('last-name', '', ['class' => 'form-control']) }}
    {{ Form::label('email', __('forms.email')) }}
    {{ Form::email('email', '', ['class' => 'form-control']) }}
    {{ Form::checkBox('subscribe', true, true) }}
    {{ Form::label('subscribe', __('forms.get_emails')) }}
    {{ Form::submit(__('forms.subscribe'), ['class' => 'form-control']) }}
    {{ Form::close() }}
@endsection