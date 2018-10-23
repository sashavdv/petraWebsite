@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="beauty">
        <div class="container">
            <h1>@lang('titles.beauty')</h1>
        </div>
    </section>

    <section id="relaxation">
        <div class="container">
            <h1>@lang('titles.relaxation')</h1>
        </div>
    </section>

    <section id="divination">
        <div class="container">
            <h1>@lang('titles.divination')</h1>
        </div>
    </section>
@endsection