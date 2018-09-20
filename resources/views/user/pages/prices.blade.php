@extends('layouts.app-new')
@section('content')
    <section id="beauty">
        <div class="container">
            <h2>@lang('prices.title-beauty')</h2>

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
            <h2>@lang('prices.title-relaxation')</h2>
            @lang('prices.list-relaxation')
            @lang('prices.text-relaxation')
        </div>
    </section>

    <section id="divination">
        <div class="container">
            <h2>@lang('prices.title-divination')</h2>
        </div>
    </section>
@endsection