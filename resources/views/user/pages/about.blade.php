@extends('layouts.app-new')

@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="ui container">
            <h1>@lang('titles.about')</h1>
            <p>@lang('content.about_paragraph_1')</p>
            <p>@lang('content.about_paragraph_2')</p>
            <p>@lang('content.about_paragraph_3')</p>
            <p>@lang('content.about_paragraph_4')</p>
            <p>@lang('content.about_paragraph_5')</p>
            <p>@lang('content.about_paragraph_6')</p>
            <p>@lang('content.about_paragraph_7')</p>
            <p>@lang('content.about_paragraph_8')</p>
            <p>@lang('content.about_paragraph_9')</p>
            <p>@lang('content.about_paragraph_10')</p>
            <p>@lang('content.about_paragraph_11')</p>
            <p>@lang('content.about_paragraph_12')</p>
            <p>@lang('content.about_paragraph_13')</p>
            <p>@lang('content.about_paragraph_14')</p>
            <p>@lang('content.about_paragraph_15')</p>
            <p>@lang('content.about_paragraph_16')</p>
            <p>@lang('content.about_paragraph_17')</p>
            <p>@lang('content.about_paragraph_18')</p>
        </div>
    </section>
@endsection