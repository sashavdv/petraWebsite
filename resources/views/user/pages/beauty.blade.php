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
            <p>@lang('content.beauty_paragraph_1')</p>
            <p>@lang('content.beauty_paragraph_2')</p>
            <p>@lang('content.beauty_paragraph_3')</p>
            <p>@lang('content.beauty_paragraph_4')</p>
            <p>@lang('content.beauty_paragraph_5')</p>
            <p>@lang('content.beauty_paragraph_6')</p>
            <p>@lang('content.beauty_paragraph_7')</p>
        </div>
    </section>
@endsection