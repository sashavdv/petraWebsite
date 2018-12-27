@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="ui container">
            <h1>@lang('titles.divination')</h1>
            <p>@lang('content.divination_paragraph_1')</p>
            <p>@lang('content.divination_paragraph_2')</p>
            <p>@lang('content.divination_paragraph_3')</p>
            <p>@lang('content.divination_paragraph_4')</p>
            <p>@lang('content.divination_paragraph_5')</p>
            <p>@lang('content.divination_paragraph_6')</p>
            <p>@lang('content.divination_paragraph_7')</p>
            <p>@lang('content.divination_paragraph_8')</p>
            <p>@lang('content.divination_paragraph_9')</p>
            <p>@lang('content.divination_paragraph_10')</p>
            <p>@lang('content.divination_paragraph_11')</p>
            <p>@lang('content.divination_paragraph_12')</p>
            <p>@lang('content.divination_paragraph_13')</p>
            <p>@lang('content.divination_paragraph_14')</p>
        </div>
    </section>
@endsection