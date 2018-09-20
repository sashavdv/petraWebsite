@extends('layouts.app-new')
@section('content')
    <section id="subscribe">
        <div class="container">
            <h2>@lang('contact.title-subscribe')</h2>
            {{ Form::open(['action' => 'ContactController@Subscribe', 'method' => 'post']) }}
            {{ Form::label('first-name', __('forms.first_name')) }}
            {{ Form::text('first-name', '', ['class' => 'form-control']) }}
            {{ Form::label('last-name', __('forms.last_name')) }}
            {{ Form::text('last-name', '', ['class' => 'form-control']) }}
            {{ Form::label('email', __('forms.email')) }}
            {{ Form::email('email', '', ['class' => 'form-control']) }}
            {{ Form::label('title', __('forms.title')) }}
            @if(isset($title))

            {{ Form::text('title', $title, ['class' => 'form-control']) }}
        @else
            {{ Form::text('title', '', ['class' => 'form-control']) }}

        @endif
            {{ Form::label('description', __('forms.description')) }}
            {{ Form::textArea('description', '', ['class' => 'form-control']) }}
            {{ Form::checkBox('subscribe', true, true) }}
            {{ Form::label('subscribe', __('forms.get_emails')) }}
            {{ Form::submit(__('forms.subscribe'), ['class' => 'form-control']) }}
            {{ Form::close() }}
        </div>
    </section>
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
@endsection