@extends('layouts.app')
@section('content')

    <section id="about" class="bkg-white">
        <div class="container">
            <h2>@lang('titles.about')</h2>
            <p>@lang('content.about')</p>
        </div>
    </section>

    <section id="events" class="bkg-blue">
        <div class="container">
            <h2>@lang('titles.events')</h2>
            @include('layouts.inc.calendar')

        </div>
    </section>

    <section id="reviews" class="bkg-yellow">
        <div class="container">
            <h2>@lang('titles.reviews')</h2>
            <div class="reviews">
                @foreach ($aReviews as $oReview)
                <div id="review{{ $oReview->id }}" class="review">
                    <span class="rev-title">{{ $oReview->title }}</span>
                    <span class="rev-name">{{ $oReview->name }}</span>
                    <span class="rev-stars">{{ $oReview->rating }}</span>
                    <p>{{ $oReview->review }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection