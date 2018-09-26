@extends('layouts.app-new')
@section('content')
    <section id="subscribe">
        {{ Form::open() }}
        <span class="form-title">Inschrijven</span>
        <div class="form-group">
            <label for="event">Evenement</label>
            <input type="text" name="event" id="event" disabled value="test"/>
        </div>
        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" name="name" id="name"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"/>
        </div>
        <button type="submit">Inschrijven</button>
        {{ Form::close() }}
    </section>
@endsection