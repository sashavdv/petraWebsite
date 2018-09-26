@extends('layouts.app-new')
@section('content')
    <section id="contact">
        {{ Form::open() }}
        <span class="form-title">Contacteer mij</span>
        <div class="form-group">
            <label for="subject">Onderwerp</label>
            @if (isset($oEvent))
                <input type="text" name="event" id="event" disabled value="{{ $oEvent->title }}" required/>
            @else
                <input type="text" name="event" id="event" value="" required/>
            @endif
        </div>
        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" name="name" id="name" required/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required/>
        </div>
        <div class="form-group">
            <label for="phone">Telefoon</label>
            <input type="tel" name="phone" id="phone" required/>
        </div>
        <div class="form-group">
            <label for="description">Beschrijving</label>
            <textarea name="description" id="description" rows="10" required></textarea>
        </div>
        <div class="form-group">
            <label for="subscribe"><input type="checkbox" name="subscribe" id="subscribe" checked/> Ik wil mails ontvangen</label>
        </div>
        <button type="submit">Inschrijven</button>
        {{ Form::close() }}
    </section>
@endsection