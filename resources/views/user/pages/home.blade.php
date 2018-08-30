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
            <div class="row">
                <div class="col">
                    <div class="cal1 mx-auto"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Services</h2>
            <ul>
                <li></li>
            </ul>
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
                    <span class="rev-stars">
                       @for($i = 0; $i < 5;$i++)
                           @if($oReview->rating > $i)
                            <i class="fas fa-star"></i>
                                @else
                                <i class="far fa-star"></i>


                            @endif


                        @endfor

                    </span>
                    <p class="rev-content">{{ $oReview->review }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection