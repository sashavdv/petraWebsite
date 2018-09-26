@extends('layouts.app-new')
@section('content')
    <section id="about" class="bkg-white">
        <img class="about-photo" src="{{ asset('images/petra.jpg') }}"/>
        <div class="about-short">
            <p>@lang('content.about')</p>
            <button onclick="window.location.href='/about'">@lang('buttons.read-more')</button>
        </div>
    </section>

    <section id="events">
        <div class="events">
            <div class="cal1"></div>
            <div class="details">
                <apsn id="day">{{ date('d M Y') }}</apsn>
            </div>
        </div>
    </section>

    <section id="reviews" class="bkg-yellow">
        @foreach ($aReviews as $oReview)
            <div id="review{{ $oReview->id }}" class="review">
                @if($oReview->title != null)
                    <span class="rev-title">{{ $oReview->title }}</span>
                @endif
                <span class="rev-name">{{ $oReview->name }}</span>
                @if($oReview->rating != null)
                    <span class="rev-stars">
                       @for($i = 0; $i < 5;$i++)
                           @if($oReview->rating > $i)
                            <i class="fas fa-star"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </span>
                @endif
                <p class="rev-content">{{ $oReview->review }}</p>
            </div>
        @endforeach
    </section>
@endsection