@extends('layouts.app-new')
@section('content')
    <section id="contact">
        {{ Form::open(['action' => 'ContactController@sendMail', 'method' => 'post']) }}
        <span class="form-title">Contacteer mij</span>
        <div class="form-group">
            <label for="subject">Onderwerp</label>
            @if (isset($oEvent))
                <input type="text" name="subject" id="subject" disabled value="{{ $oEvent->title }}" required/>
            @else
                <input type="text" name="subject" id="subject" value="" required/>
            @endif
        </div>
        <div class="form-group">
            <label for="name-last">Naam</label>
            <input type="text" name="name-last" id="name-last" required/>
        </div>
        <div class="form-group">
            <label for="name-first">Voornaam</label>
            <input type="text" name="name-first" id="name-first" required/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required/>
        </div>
        @if (isset($oEvent))
            <div class="form-group">
                <label for="phone">Telefoon</label>
                <input type="tel" name="phone" id="phone" required/>
            </div>
        @endif
        <div class="form-group">
            <label for="description">Beschrijving</label>
            <textarea name="description" id="description" rows="10" required></textarea>
        </div>
        <div class="form-group">
            <label for="subscribe"><input type="checkbox" name="subscribe" id="subscribe" checked/> Ik wil mails ontvangen</label>
        </div>
        @if (isset($oEvent))
            <button name="event" value="{{ $oEvent->id }}" type="submit">Inschrijven</button>
        @else
            <button type="submit">Inschrijven</button>
        @endif
        {{ Form::close() }}
    </section>
@endsection