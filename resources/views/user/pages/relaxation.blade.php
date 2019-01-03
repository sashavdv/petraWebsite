@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="ui container">
            <p>@lang('content.relaxation-paragraph-1')</p>
            <p>@lang('content.relaxation-paragraph-2')</p>
            <p>@lang('content.relaxation-paragraph-3')</p>
            <p>@lang('content.relaxation-paragraph-4')</p>
        </div>
    </section>
@endsection