@extends('layouts.app-new')
@section('content')
    <section id="about" class="bkg-white">
        <img class="about-photo"/>
        <div class="about-short">
            <p>@lang('content.about')</p>
            <button>Lees meer</button>
        </div>
    </section>

    <section id="events">
        <div class="events">
            <div class="cal1"></div>
            <div class="details">
                <span id="day">Donderdag 13 September</span>
                <div class="selected-event">
                    <span id="event-time">12:00</span>
                    <span id="event-title">Titel Lorem Ipsum</span>
                    <p id="event-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eius et explicabo fuga, id illum ipsam nisi obcaecati odio quia repellat repellendus saepe sapiente sed soluta tempora vitae? Blanditiis, harum.</p>
                    <button>Meer informatie</button>
                </div>
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