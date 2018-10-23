@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="contact">
        <div class="container">
            <h1>Contacteer mij</h1>
            {{ Form::open(['action' => 'ContactController@sendMail', 'method' => 'post', 'onsubmit' => 'onsubmit="return checkCheckBoxes(this);"']) }}
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
                <label for="terms"><input type="checkbox" name="terms" id="subscribe" required/> Ik ga akkoord met de <a href="">Voorwaarden</a></label>
            </div>
            <div class="form-group">
                <label for="subscribe"><input type="checkbox" name="subscribe" id="subscribe" checked/> Ik wil mails ontvangen</label>
                <small>*Gegevens worden enkel opgeslagen voor het verzenden van nieuwsbrieven (indien u hiermee akkoord gaat)</small>
            </div>
            @if (isset($oEvent))
                <button name="event" value="{{ $oEvent->id }}" type="submit">Inschrijven</button>
            @else
                <button type="submit">Inschrijven</button>
            @endif
            {{ Form::close() }}
        </div>
        <script type="text/javascript" language="JavaScript">
            function checkCheckBoxes(theForm) {
                if (theForm.terms == false)
                {
                    alert ('You didn\'t choose any of the checkboxes!');
                    return false;
                } else {
                    return true;
                }
            }
        </script>
    </section>
@endsection