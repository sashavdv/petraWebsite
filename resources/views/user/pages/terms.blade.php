@extends('layouts.app')

@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="ui container">
            <h1>@lang('titles.terms')</h1>
        </div>
    </section>
@endsection