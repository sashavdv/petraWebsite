@extends('layouts.admin')

@section('content')
 <section>
  <div class="ui container">
   {{ Form::open(['action' => 'AdminEventController@saveEvent', 'method' => 'post', 'class' => 'ui form']) }}
   {{ Form::hidden('id', $oEventData->id) }}
   <div class="field">
    {{ Form::label('date', 'Datum') }}
    {{ Form::date('date', $oEventData->date, ['class' => 'form-control', 'required' => 'required', 'pattern' => '[0-2][0-9]:[0-5][0-9]']) }}
   </div>
   <div class="field">
    {{ Form::label('time', 'Tijd') }}
    {{ Form::text('time', $oEventData->event_time, ['class' => 'form-control', 'required']) }}
   </div>
   <div class="field">
    {{ Form::label('title', 'Titel') }}
    {{ Form::text('title', $oEventData->title, ['class' => 'form-control', 'required']) }}
   </div>
   <div class="field">
    {{ Form::label('type', 'Categorie') }}
    <select name="type" value="{{ $oEventData->type }}">
     <option value="default">Algemeen</option>
     <option value="beauty">Schoonheid</option>
     <option value="relaxation">Relaxatie</option>
     <option value="divination">Divinatie</option>
    </select>
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
   <button class="ui button" type="submit">Opslaan</button>
   <a class="ui button" href="/admin/events">Annuleren</a>
   {{ Form::close() }}
  </div>
 </section>
@endsection