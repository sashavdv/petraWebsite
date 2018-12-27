@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="beauty">
        <div class="ui container">
            <h1>@lang('titles.beauty')</h1>
        </div>
    </section>

    <div class="ui divider"></div>

    <section id="ui relaxation">
        <div class="ui container">
            <h1>@lang('titles.relaxation')</h1>
        </div>
    </section>

    <div class="ui divider"></div>

    <section id="ui divination">
        <div class="ui container">
            <h1>@lang('titles.divination')</h1>
        </div>
    </section>
@endsection