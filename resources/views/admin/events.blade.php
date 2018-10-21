@extends('layouts.admin')
@section('content')
    <section id="new-event">
        <div class="container">
            <h1>Niew evenement toevoegen</h1>
            @if (session('message'))
                <div class="message">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
            <div class="event">
                {{ Form::open(['action' => 'AdminEventController@addEvent', 'method' => 'post']) }}
                <div class="form-group">
                    {{ Form::label('date', 'Datum') }}
                    {{ Form::date('date', '', ['class' => 'form-control', 'required' => 'required', 'pattern' => '[0-2][0-9]:[0-5][0-9]']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('time', 'Tijd') }}
                    {{ Form::text('time', '', ['class' => 'form-control', 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('title', 'Titel') }}
                    {{ Form::text('title', '', ['class' => 'form-control', 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('type', 'Categorie') }}
                    <select name="type">
                        <option value="default">Algemeen</option>
                        <option value="beauty">Schoonheid</option>
                        <option value="relaxation">Relaxatie</option>
                        <option value="divination">Divinatie</option>
                    </select>
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
    </section>
@endsection