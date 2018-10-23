@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="container">
            <h1>@lang('titles.movie')</h1>
            <p>@lang('content.movie')</p>
        </div>
    </section>
    <section>
        <div class="container">
            <h1>@lang('titles.price')</h1>
            <p>@lang('content.price')</p>
        </div>
    </section>
@endsection