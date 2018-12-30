@extends('layouts.app-new')

<?php
$lang = Cookie::get('lang');
if ($lang != 'nl') $lang = 'en';
App::setLocale($lang);
?>

@section('content')
    <section id="about">
        <div class="ui container">

            <div class="ui card" style="max-width: 100%; min-width: 100%;">
                <div class="content">
                    <div class="ui items">
                        <div class="item">
                            <div class="ui medium image">
                                <img src="{{ asset('images/petra.jpg') }}"/>
                            </div>
                            <div class="content" style="padding: 1rem;">
                                <div class="header">Petra Stienaers</div>
                                <div class="description">
                                    <p>@lang('content.about_paragraph_1')</p>
                                    <p class="shorten">@lang('content.about_paragraph_2')</p>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="content">
                                <p class="hide about">@lang('content.about_paragraph_3')</p>
                                <p class="hide about">@lang('content.about_paragraph_4')</p>
                                <a class="ui button fluid" onclick="readMore()">@lang('buttons.read-more')</a>
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
            <div class="ui stackable grid">
                <div class="eight wide column">
                    <div class="cal1"></div>
                </div>
                <div class="eight wide column">
                    <div class="clndr-details">
                        <div id="clndr-day">{{ date('d M Y') }}</div>
                        <div class="content-wrapper">
                            <div class="overflow-container">
                                <div id="clndr-day-details"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui bottom attached">
                {{-- TODO Info -> Gebruiksaanwijzing (footnote) --}}
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam, architecto blanditiis consequatur distinctio dolorem dolorum error ipsam iste, libero natus nemo quaerat ratione repellat sequi sint unde veritatis voluptates!</p>
            </div>
        </div>
    </section>
    <section id="modal"></section>
    <div class="ui divider"></div>

    <section id="reviews">
        {{-- TODO Toevoegen -> Foto + Beroep --}}
        {{-- TODO Opmaak -> Eerste 5 woorden vet gedrukt + Plumpjes onder elkaar (mobiel) + Petra bezorgd screens --}}
        <div class="ui container">
            <h1>@lang('titles.reviews')</h1>
            @foreach ($aReviews as $oReview)
                <div class="ui card event-card">
                    <div class="content">
                        <div class="ui items">
                            <div class="item">
                                <div class="content">
                                    <div class="header p15">
                                        <span>{{ $oReview->name }}</span>
                                    </div>
                                    <span class="right floated">
                                            @for($i = 0; $i < $oReview->rating ;$i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    </span>
                                    <div class="description">
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

@section('modals')
    <div class="ui modal">
        <div class="header"><span id="modal-title"></span></div>
        <div class="content">
            <div class="meta">
                <span id="modal-date"></span>
                <span id="modal-price"></span>
            </div>
            <div class="description">
                <span id="modal-description"></span>
            </div>
        </div>
        <div class="actions">
            <div class="ui black deny button">@lang('modal.cancel')</div>
            <a id="modal-subscribe" class="ui positive button">@lang('modal.subscribe')<i class="fas fa-pen" style="margin-left: 1em"></i></a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/clndr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/clndr-custom.js') }}" type="text/javascript"></script>

    <script>
        loadCalender(<?php echo($aEvents) ?>, <?php echo '\'' . Cookie::get('lang') . '\'' ?>);

        $(document).ready(function () {
            updateCalenderContentHeight();
        });

        window.onresize = function() {
            updateCalenderContentHeight();
        };

        function updateCalenderContentHeight() {
            $('#clndr-day-details').height($('.clndr-table').height());
        }

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

            $('#modal-title').text(event.title);
            $('#modal-date').text(event.date + " " + event.event_time);
            $('#modal-price').text("€" + event.price);
            $('#modal-description').text(event.description);
            $('#modal-subscribe').attr('href', '{{ url('/') }}/contact?event_id=' + event.id).attr('class', 'ui button event-button-' + event.type);

            $('.ui.modal').modal('show');

            function getEvent(id) {
                var events = <?php echo $aEvents ?>;

                for (var event of events) {
                    if (event.id == id) {
                        return event;
                    }
                }
            }
        }
    </script>
@endsection