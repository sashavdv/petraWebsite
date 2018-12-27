@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="ui container">
            <h1>@lang('titles.relaxation')</h1>
            <h2>@lang('subtitles.relaxation-subtitle-1')</h2>
            <p>@lang('content.relaxation-paragraph-1')</p>
            <p>@lang('content.relaxation-paragraph-2')</p>
            <p>@lang('content.relaxation-paragraph-3')</p>
            <p>@lang('content.relaxation-paragraph-4')</p>
            <h2>@lang('subtitles.relaxation-subtitle-2')</h2>
            <p>@lang('content.relaxation-paragraph-5')</p>
            <h2>@lang('subtitles.relaxation-subtitle-3')</h2>
            <p>@lang('content.relaxation-paragraph-6')</p>
            <p>@lang('content.relaxation-paragraph-7')</p>
            <p>@lang('content.relaxation-paragraph-8')</p>
            <p>@lang('content.relaxation-paragraph-9')</p>
        </div>
    </section>
@endsection