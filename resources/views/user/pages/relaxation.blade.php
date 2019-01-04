@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="ui container">
            <div class="ui vertical masthead center aligned segment pb-30">
                <div class="ui text container">
                    <h1 class="ui header">@lang('titles.relaxation')</h1>
                </div>
            </div>
            <div class="mt-30">
            <div class="ui middle aligned stackable grid container">
                <div class="sixteen wide row">

                    <div class="eight wide column">
                        <div class="row pb-30">
                            <img class="ui image bordered rounded large" src="{{ asset('images/relaxatie/relaxatie_yoga.jpg') }}" alt="A picture of meditation">
                        </div>
                        <div class="row">
                        <img class="ui image bordered rounded large" src="{{ asset('images/relaxatie/vrouw_meditatie.jpg') }}" alt="A picture of a guy meditating">
                        </div>
                    </div>
                    <div class="eight wide column middle aligned right floated">
                        <p>@lang('content.relaxation-paragraph-1')</p>
                    </div>
                </div>
                <div class="sixteen wide row">
                    <div class="eight wide column middle aligned">
                        <p>@lang('content.relaxation-paragraph-2')</p>
                    </div>
                    <div class="eight wide column ">
                        <img class="ui image bordered rounded large right floated" src="{{ asset('images/relaxatie/relaxatie_vrouw.jpg') }}" alt="A picture of a woman relaxing">
                    </div>

                </div>
                <div class="sixteen wide row">
                    <div class="eight wide column">
                        <img class="ui image bordered rounded large" src="{{ asset('images/relaxatie/vermoeidheid-2.jpg') }}" alt="A picture of a beauty treatment">
                    </div>
                    <div class="eight wide column middle aligned right floated">
                        <p>@lang('content.relaxation-paragraph-3')</p>
                    </div>
                </div>
                <div class="fourteen wide row">
                    <div class="eight wide column middle aligned">
                        <p>@lang('content.relaxation-paragraph-4')</p>
                    </div>
                    <div class="six wide column right floated">
                        <img class="ui image bordered rounded large" src="{{ asset('images/relaxatie/relaxatie_wandelingen.jpg') }}" alt="A picture of a beauty treatment">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection