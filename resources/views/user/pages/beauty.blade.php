@extends('layouts.app')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="skincare">
        <div class="ui container">

            <div class="ui vertical masthead center aligned segment pb-30">
                <div class="ui text container">
                    <h1 class="ui header">@lang('titles.beauty')</h1>
                </div>
            </div>
            <div class="mt-30">
                <div class="ui middle aligned stackable grid container">
                    <div class="sixteen column row">
                        <div class="eight wide column">
                            <img class="ui image bordered rounded full-width-image" src="{{ asset('images/beauty/Beauty_Behandeling_penselen.jpg') }}" alt="A picture of a beauty treatment">
                        </div>
                        <div class="eight wide column middle aligned right floated">
                            <h2>@lang('subtitles.beauty_subtitle_1')</h2>
                            <p>@lang('content.beauty_paragraph_1')</p>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen column row">
                        <div class="eight wide column middle aligned">
                            <p>@lang('content.beauty_paragraph_2')</p>
                        </div>
                        <div class="eight wide column right floated ">
                            <img  class="ui image bordered rounded medium full-width-image"  src="{{ asset('images/beauty/beauty_gelaat.jpg') }}" alt="A picture of petra stienaers">
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen column row">
                        <div class="eight wide column">
                            <img  class="ui image bordered rounded full-width-image"  src="{{ asset('images/beauty/beauty_3.jpg') }}" alt="A picture of relaxed customer">
                        </div>
                        <div class="eight wide column right floated middle aligned">
                            <p>@lang('content.beauty_paragraph_3')</p>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen column row">
                        <div class="eight wide column middle aligned">
                            <p>@lang('content.beauty_paragraph_4')</p>
                        </div>
                        <div class="eight wide column right floated ">
                            <img  class="ui image bordered rounded full-width-image"  src="{{ asset('images/beauty/beauty_Voetenbad.jpg') }}" alt="A picture of feetbath">
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen column row">
                        <div class="eight wide column">
                            <img  class="ui image bordered rounded full-width-image" src="{{ asset('images/beauty/beauty_Behandeling_man.jpg') }}" alt="A picture of a man getting a massage">
                        </div>
                        <div class="eight wide column right floated middle aligned">
                            <p>@lang('content.beauty_paragraph_5')</p>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen wide row ">
                        <div class="image-row">
                            <img src="{{ asset('images/logos/NATRUE-label.jpg') }}">
                            <img src="{{ asset('images/logos/Dr. Hauschka.jpg') }}">
                            <img src="{{ asset('images/beauty/Aroma.jpg') }}">
                            <img src="{{ asset('images/beauty/pedicure2.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection