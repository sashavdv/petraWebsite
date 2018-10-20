@extends('layouts.app-new')
@section('content')
    <section id="beauty">
        <div class="container">
            <h1>@lang('prices.title-beauty')</h1>

            <article id="face-care">
                <h5>@lang('prices.title-face-care')</h5>
                @lang('prices.text-face-care')
                @lang('prices.text-face-care-1')
                @lang('prices.text-face-care-2')
            </article>

            <article id="pedicure">
                <h5>@lang('prices.title-pedicure')</h5>
                @lang('prices.text-pedicure')
            </article>

            <article id="massage">
                <h5>@lang('prices.title-massage')</h5>
                @lang('prices.text-massage')
            </article>
        </div>
    </section>

    <section id="relaxation">
        <div class="container">
            <h1>@lang('prices.title-relaxation')</h1>
            @lang('prices.list-relaxation')
            @lang('prices.text-relaxation')
        </div>
    </section>

    <section id="divination">
        <div class="container">
            <h1>@lang('prices.title-divination')</h1>
        </div>
    </section>
@endsection