@extends('layouts.app-new')

<?php
$lang = Cookie::get('lang');
App::setLocale($lang);
?>

@section('content')
    <section id="about">
        <div class="container">
            <h1>@lang('titles.about')</h1>
            <img class="about-photo" src="{{ asset('images/petra.jpg') }}"/>
            <div class="about-short">
                <p>@lang('content.about')</p>
                <button onclick="window.location.href='/about'">@lang('buttons.read-more')</button>
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container">
            <div class="events">
                <div class="cal1"></div>
                {{Form::open(['action' => 'ContactController@subscribe', 'method' => 'post'])}}
                <div class="details">
                    <span id="day">{{ date('d M Y') }}</span>
                </div>
                {{Form::close()}}
            </div>
            <script>
                loadCalender(<?php echo($aEvents) ?>, <?php echo '\'' . Cookie::get('lang') . '\'' ?>);

                function addEventsListeners() {
                    var btnEvents = document.getElementsByName('event-button');
                    var btnAll = [];
                    var allEvents = <?php echo($aEvents) ?>;

                    for (var i = -1; i < btnEvents.length; i++) {
                        btnAll.push(btnEvents[i]);
                    }
                    console.log(btnEvents);

                    for (var event of allEvents) {

                    }
                }

                function eventPopUp(event) {

                }
            </script>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <h1>@lang('titles.reviews')</h1>
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
        </div>
    </section>
@endsection