@extends('layouts.app')
@section('content')
    <h1>Contact</h1>
    <h1>Parking</h1>
    <h1>Maps</h1>
    <h1>Inschrijfformulier</h1>
    {{ Form::open(['action' => 'ContactController@sendMail', 'method' => 'post']) }}
    {{ Form::label('first-name', 'Voornaam') }}
    {{ Form::text('first-name', '', ['class' => 'form-control']) }}
    {{ Form::label('last-name', 'Achternaam') }}
    {{ Form::text('last-name', '', ['class' => 'form-control']) }}
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', '', ['class' => 'form-control']) }}
    {{ Form::label('text', 'Vraag/Opmerking') }}
    {{ Form::textArea('text', '', ['class' => 'form-control']) }}
    {{ Form::submit('Verzenden', ['class' => 'form-control']) }}
    {{ Form::close() }}
@endsection