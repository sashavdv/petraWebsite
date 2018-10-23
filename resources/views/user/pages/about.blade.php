@extends('layouts.app-new')

@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="container">
            <h1>Over mij</h1>
        </div>
    </section>
@endsection