@extends('layouts.admin')
@section('content')
        <div class="container">
            <h2>Pluimpjes</h2>
            <div class="event">

                        {{ Form::open(['action' => 'AdminEventController@addEvent', 'method' => 'post']) }}
                        {{ Form::label('date', 'Datum') }}
                        {{ Form::date('date', '', ['class' => 'form-control', 'required']) }}
                        {{ Form::label('title', 'Titel') }}
                        {{ Form::text('title', '', ['class' => 'form-control', 'required']) }}
                        {{ Form::label('description_nl', 'Beschrijving in het nederlands') }}
                        {{ Form::textarea('description_nl', '', ['class' => 'form-control', 'required']) }}
                        {{ Form::label('description_fr', 'Beschrijving in het frans') }}
                        {{ Form::textarea('description_fr', '', ['class' => 'form-control', 'required']) }}
                <p><button type="submit" name="status" value="save" class="form-control">Opslaan</button></p>
                <br/>
                <button type="submit" name="status" value="drop" class="form-control">Cancel</button>

                {{ Form::close() }}
            </div>
        </div>
@endsection