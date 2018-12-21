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
        </div>
    </section>
@endsection