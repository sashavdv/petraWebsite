@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="skincare">
        <div class="container">
            <h1>Huidverzorging</h1>
            <h5>@lang('beauty.title-importance-skincare')</h5>
            @lang('beauty.text-importance-skincare')
            @lang('beauty.text-why-natural')

            <h5>@lang('beauty.title-advantages-natural')</h5>
            @lang('beauty.list-advantages-natural')

            <h5>@lang('beauty.title-danger-synthetic')</h5>
            @lang('beauty.text-danger-synthetic')

            <h5>@lang('beauty.title-calender-info')</h5>
            @lang('beauty.text-calender-info')

            <h5>@lang('beauty.title-price')</h5>
            <?php echo __('beauty.text-price', ['link' => 'prices#beauty']); ?>
        </div>
    </section>
@endsection