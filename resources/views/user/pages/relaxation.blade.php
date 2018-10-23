@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="container">
            <h1>@lang('titles.meditation')</h1>
            <p>@lang('content.meditation')</p>
        </div>
    </section>
    <section>
        <div class="container">
            <h1>@lang('titles.coaching')</h1>
            <p>@lang('content.coaching')</p>
        </div>
    </section>
    <section>
        <div class="container">
            <h1>@lang('titles.spirituality')</h1>
            <p>@lang('content.spirituality')</p>
        </div>
    </section>
@endsection