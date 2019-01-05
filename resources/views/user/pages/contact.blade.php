@extends('layouts.app')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>

    <section id="contact">
        <div class="ui container">
            <h1>@lang('titles.contact')</h1>

            @if(isset($oEvent))
                @if($oEvent->type != 'divination')
                    {{ Form::open(['action' => 'ContactController@sendMail', 'method' => 'post', 'onsubmit' => 'onsubmit="return checkCheckBoxes(this);"', 'class' => 'ui form']) }}
                @else
                    {{ Form::open(['action' => 'PaymentController@preparePayment', 'method' => 'post', 'onsubmit' => 'onsubmit="return checkCheckBoxes(this);"', 'class' => 'ui form']) }}
                @endif
            @else
                {{ Form::open(['action' => 'ContactController@sendMail', 'method' => 'post', 'onsubmit' => 'onsubmit="return checkCheckBoxes(this);"', 'class' => 'ui form']) }}
            @endif

            <div class="field">
                <label for="subject">@lang('forms.subject')</label>
                @if (isset($oEvent))
                    <input type="hidden" name="event" value="true"/>
                    <input readonly type="text" name="subject" class="ui disabled input" id="subject" value="{{ $oEvent->title }}" required/>
                    {{--<span class="contact-event">{{ $oEvent->title }}</span>--}}
                @else
                    <input type="text" name="subject" id="subject" value="" required/>
                @endif
            </div>
            <div class="field">
                <label for="name-last">@lang('forms.name-last')</label>
                <input type="text" name="name-last" id="name-last" required/>
            </div>
            <div class="field">
                <label for="name-first">@lang('forms.name-first')</label>
                <input type="text" name="name-first" id="name-first" required/>
            </div>
            <div class="field">
                <label for="email">@lang('forms.email')</label>
                <input type="email" name="email" id="email" required/>
            </div>
            @if (isset($oEvent))
                <div class="field">
                    <label for="phone">@lang('forms.phone')</label>
                    <input type="tel" name="phone" id="phone" required/>
                </div>
            @endif
            <div class="field">
                <label for="description">@lang('forms.description')</label>
                <textarea name="description" id="description" rows="10" required></textarea>
            </div>

            <div class="field">
                <div class="ui checkbox">
                    <input name="terms" id="terms" required type="checkbox" tabindex="0" class="hidden">
                    <label>@lang('forms.terms')</label>
                </div>
            </div>

            <div class="field">
                <div class="ui checkbox">
                    <input name="subscribe" id="subscribe"  type="checkbox" checked class="hidden">
                    <label>@lang('forms.subscribe-check')</label>
                    <small>*@lang('forms.disclaimer')</small>
                </div>
            </div>

            <input style="display: none" name="lang" value="{{ $lang }}">
            @if (isset($oEvent))
                <button name="event" class="ui secondary  button" value="{{ $oEvent->id }}" type="submit">@lang('forms.subscribe-button')</button>
            @else
                <button type="submit" class="ui secondary  button">@lang('buttons.send')</button>
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

@section('scripts')
    <script>
        $('.ui.checkbox')
            .checkbox()
        ;
    </script>
@endsection

