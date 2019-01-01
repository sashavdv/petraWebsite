@extends('layouts.admin')

@section('content')
    {{ Form::open(['action' => 'AdminEventController@saveEvent', 'method' => 'post', 'class' => 'ui form']) }}

    <section id="header">
        <div class="ui container">
            <h1>Evenement aanmaken/bewerken</h1>
            <button class="ui primary button" type="submit">Opslaan <i class="fas fa-save pl-5"></i></button>
            <a class="ui negative button" href="/admin/events">Annuleren <i class="fas fa-ban pl-5"></i></a>
        </div>
    </section>

    <div class="ui divider"></div>

    <section>
        <div class="ui container">
            {{ Form::hidden('id', $oEventData->id) }}
            <div class="field">
                {{ Form::label('date', 'Datum') }}
                {{ Form::date('date', $oEventData->date, ['class' => 'form-control', 'required' => 'required', 'pattern' => '[0-2][0-9]:[0-5][0-9]']) }}
            </div>
            <div class="field">
                {{ Form::label('time', 'Tijd') }}
                {{ Form::time('time', $oEventData->event_time, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="field">
                {{ Form::label('title', 'Titel') }}
                {{ Form::text('title', $oEventData->title, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="field">
                {{ Form::label('type', 'Categorie') }}
                <div class="ui selection dropdown">
                    <input type="hidden" name="type" value="{{ $oEventData->type }}">
                    <i class="dropdown icon"></i>
                    <div class="default text">Selecteer een categorie</div>
                    <div class="menu">
                        <div class="item" data-value="default">Algemeen</div>
                        <div class="item" data-value="beauty">Schoonheid</div>
                        <div class="item" data-value="relaxation">Relaxatie</div>
                        <div class="item" data-value="divination">Divinatie</div>
                    </div>
                </div>
            </div>
            <div class="field">
                {{ Form::label('price', 'Prijs') }}
                {{ Form::number('price', $oEventData->price) }}
            </div>
            <div class="field">
                {{ Form::label('description_nl', 'Beschrijving nederlands') }}
                {{ Form::textarea('description_nl', $oEventData->description_nl, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="field">
                {{ Form::label('description_en', 'Beschrijving engels') }}
                {{ Form::textarea('description_en', $oEventData->description_en, ['class' => 'form-control', 'required']) }}
            </div>
        </div>
    </section>

    {{ Form::close() }}
@endsection

@section('scripts')
    <script>
        $('.ui.dropdown').dropdown();
    </script>
@endsection