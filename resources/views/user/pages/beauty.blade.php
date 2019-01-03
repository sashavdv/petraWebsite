@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="skincare">
        <div class="ui container">
            <h1>@lang('titles.beauty')</h1>
            <h2>@lang('subtitles.beauty_subtitle_1')</h2>
            <div class="ui items">

                <div class="item">
                    <div class="ui image medium">
                        <img src="{{ asset('images/beauty/Beauty_Behandeling_penselen.jpg') }}" alt="A picture of petra stienaers">
                    </div>
                    <div class="middle aligned content">
                        <div class="description">
                            <p>@lang('content.beauty_paragraph_1')</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="middle aligned content">
                        <div class="description">
                            <p>@lang('content.beauty_paragraph_2')</p>
                        </div>
                    </div>
                    <div class="ui image medium">
                        <img src="{{ asset('images/beauty/Beauty_Behandeling_penselen.jpg') }}" alt="A picture of petra stienaers">
                    </div>
                </div>

                <div class="item">
                    <div class="ui image medium">
                        <img src="{{ asset('images/beauty/Beauty_Behandeling_penselen.jpg') }}" alt="A picture of petra stienaers">
                    </div>
                    <div class="middle aligned content">
                        <div class="description">
                            <p>@lang('content.beauty_paragraph_3')</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="middle aligned content">
                        <div class="description">
                            <p>@lang('content.beauty_paragraph_4')</p>
                        </div>
                    </div>
                    <div class="ui image medium">
                        <img src="{{ asset('images/beauty/Beauty_Behandeling_penselen.jpg') }}" alt="A picture of petra stienaers">
                    </div>
                </div>

                <div class="item">
                    <div class="ui image medium">
                        <img src="{{ asset('images/beauty/Beauty_Behandeling_penselen.jpg') }}" alt="A picture of petra stienaers">
                    </div>
                    <div class="middle aligned content">
                        <div class="description">
                            <p>@lang('content.beauty_paragraph_5')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection