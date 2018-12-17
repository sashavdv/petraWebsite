@extends('layouts.app-new')

<?php
$lang = Cookie::get('lang');
if ($lang != 'nl') $lang = 'en';
App::setLocale($lang);
?>

@section('content')
    <section id="about">
        <div class="ui container">
{{--            <h1>@lang('titles.about')</h1>--}}
            <div class="ui card" style="max-width: 100%; min-width: 100%;">
                <div class="content">
                    <div class="ui items">
                        <div class="item">
                            <div class="ui medium image">
                                <img src="{{ asset('images/petra.jpg') }}"/>
                            </div>
                            <div class="content" style="padding: 1rem;">
                                <div class="header">Petra Stienaers</div>
                                <div class="extra content">
                                    <p style="text-align: justify">@lang('content.about-short')</p>
                                    <a class="ui button" href="/about">@lang('buttons.read-more')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ui divider"></div>

    <section id="events">
        <div class="ui container">
            <h1>@lang('titles.events')</h1>
            <div class="events">
                <div class="cal1"></div>
                <div class="details">
                    {{--<span id="day">{{ date('d M Y') }}</span>--}}
                </div>
            </div>
        </div>
    </section>
    <section id="modal"></section>
    <div class="ui divider"></div>

    <section id="reviews">
        <div class="ui container">
            <h1>@lang('titles.reviews')</h1>
            @foreach ($aReviews as $oReview)
                <div class="ui card" style="max-width: 100%; min-width: 100%;">
                    <div class="content">
                        <div class="ui items">
                            <div class="item">
                                <div class="content" style="padding: 1rem;">
                                    <div class="header">
                                        <span>{{ $oReview->name }}</span>
                                        <span style="position: absolute; right: 2rem">
                                            @for($i = 0; $i < $oReview->rating ;$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </span>
                                    </div>
                                    <div class="extra content">
                                        <p style="text-align: justify">{{ $oReview->review }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('styles')

@endsection

@section('scripts')

    <script src="{{ asset('js/clndr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/clndr-custom.js') }}" type="text/javascript"></script>
    <script>
        loadCalender(<?php echo($aEvents) ?>, <?php echo '\'' . Cookie::get('lang') . '\'' ?>);
    </script>

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
            var buttons;

            if ('{{ $lang }}' == 'nl') {
                event.description = event.description_nl;
                buttons = {
                    Inschrijven: function () {
                        window.location.href = '{{ url('/') }}/contact?event_id=' + event.id;
                    },
                    Annuleren: function () {

                    },
                };
            }
            else {
                event.description = event.description_en;
                buttons = {
                    Subscribe: function () {
                        window.location.href = '{{ url('/') }}/contact?event_id=' + event.id;
                    },
                    Cancel: function () {

                    },
                };
            }
        // <div class="header">
        //         Modal Title
        //     </div>
        //     <div class="image content">
        //         <div class="image">
        //         An image can appear on left or an icon
        //     </div>
        //     <div class="description">
        //         A description can appear on the right
        //     </div>
        //     </div>
        //     <div class="actions">
        //         <div class="ui button">Cancel</div>
        //         <div class="ui button">OK</div>
        //         </div>
            var htmlDescription = $('<div class="ui modal">')
                .append($('<span class="header popup-date">').text(event.date))
                .append($('<span class="content popup-time">').text(event.event_time))
                .append($('<span class="content popup-price">').text('€' + event.price))
                .append($('<span class="content popup-type">').text(event.type))
                .append($('<p class="description popup-description">').text(event.description))
                .append($('<small class="content popup-disclaimer">').text())
                .append('<div class="actions">')

           // htmlDescription
            console.log(buttons);

            $('#modal').append(htmlDescription);

            $('.ui.modal')
                .modal('show')
            ;
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