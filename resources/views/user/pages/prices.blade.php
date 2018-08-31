@extends('layouts.app')
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
@endsection