@extends('layouts.admin')
@section('content')
        <div class="container">
            @if (session('message'))
                <div class="message">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
            <div class="event">
                {{ Form::open(['action' => 'AdminEventController@addEvent', 'method' => 'post']) }}
                    <span class="form-title">Nieuw evenement toevoegen</span>
                    <div class="form-group">
                        {{ Form::label('date', 'Datum') }}
                        {{ Form::date('date', '', ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('title', 'Titel') }}
                        {{ Form::text('title', '', ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('price', 'Prijs') }}
                        {{ Form::number('price', '0') }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description_nl', 'Beschrijving nederlands') }}
                        {{ Form::textarea('description_nl', '', ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('description_en', 'Beschrijving engels') }}
                        {{ Form::textarea('description_en', '', ['class' => 'form-control', 'required']) }}
                    </div>
                    <button type="submit" name="status" value="save" class="form-control">Opslaan</button>
                {{ Form::close() }}
            </div>
        </div>
@endsection