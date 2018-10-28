@extends('layouts.app-new')

<?php
$lang = Cookie::get('lang');
if ($lang != 'nl') $lang = 'en';
App::setLocale($lang);
?>

@section('content')
    <section id="about">
        <div class="container">
            <h1>@lang('titles.about')</h1>
            <img class="about-photo" src="{{ asset('images/petra.jpg') }}"/>
            <div class="about-short">
                <p>@lang('content.about-short')</p>
                <button onclick="window.location.href='/about'">@lang('buttons.read-more')</button>
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container">
            <div class="events">
                <div class="cal1"></div>
{{--                {{Form::open(['action' => 'WelcomeController@popUp', 'method' => 'post'])}}--}}
                <div class="details">
                    <span id="day">{{ date('d M Y') }}</span>
                </div>
{{--                {{Form::close()}}--}}
            </div>
            <script>
                loadCalender(<?php echo($aEvents) ?>, <?php echo '\'' . Cookie::get('lang') . '\'' ?>);
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
    <script>
        function addButtonEvents() {
            var eventbuttons = document.getElementsByName('event-button');

            for (var btn of eventbuttons) {
                btn.addEventListener('click', function () {
                    displayPopUp(this.value);
                })
            }
        }

        function displayPopUp(id) {
            var event = getEvent(id);

            if ('{{ $lang }}' == 'nl') {
                event.description = event.description_nl;
            }
            else {
                event.description = event.description_en;
            }

            var htmlDescription = $('<div class="popup-container">')
                .append($('<span class="popup-date">').text(event.date))
                .append($('<span class="popup-time">').text(event.event_time))
                .append($('<span class="popup-price">').text('€' + event.price))
                .append($('<span class="popup-type">').text(event.type))
                .append($('<p class="popup-description">').text(event.description))
                .append($('<small class="popup-disclaimer">').text());

            $.confirm({
                title: event.title,
                content: htmlDescription,
                buttons: {
                    Inschrijven: function () {
                        window.location.href = '{{ url('/') }}/contact?event_id=' + event.id;
                    },
                    Annuleren: function () {

                    },
                },
                theme: 'my-theme',
            });
        }

        function getEvent(id) {
            var events = <?php echo $aEvents ?>;

            for (var event of events) {
                if (event.id == id) {
                    return event;
                }
            }
        }
    </script>
@endsection