@extends('layouts.app-new')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section>
        <div class="ui container">
            <div class="ui vertical masthead center aligned segment pb-30">
                <div class="ui text container">
                    <h1 class="ui header">@lang('titles.divination')</h1>
                </div>
            </div>
            <div class="mt-30">
                <div class="ui middle aligned stackable grid container">
                    <div class="sixteen wide row">
                        <div class="four wide column ">
                            <img class="ui image bordered rounded full-width-image" src="{{ asset('images/divinatie/cirkelbloemen.jpg') }}" alt="A picture of a circle of flowers">
                        </div>
                        <div class="twelve wide column ">
                            <p>@lang('content.divination_paragraph_1')</p>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen wide row">
                        <div class="sixteen wide column centered">
                            <p>@lang('content.divination_paragraph_2')</p>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen wide row">
                        <div class="eight wide column ">
                            <img class="ui image bordered rounded full-width-image" src="{{ asset('images/divinatie/tarot_lovers.jpg') }}" alt="A picture of the lovers tarot card">
                        </div>
                        <div class="eight wide column right floated">
                            <p>@lang('content.divination_paragraph_3')</p>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen wide row">
                        <div class="eight wide column">
                            <p>@lang('content.divination_paragraph_4')</p>
                        </div>
                        <div class="eight wide column ">
                            <div class="full-height-image-row">
                                <img src="{{ asset('images/divinatie/doosje.jpg') }}" alt="A picture of box">
                                <img src="{{ asset('images/divinatie/runetekens.jpg') }}" alt="A picture of rune signs">
                            </div>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen wide row">
                        <div class="four wide column">
                            <img class="ui image bordered rounded full-width-image" src="{{ asset('images/divinatie/tarot_leggen.jpg') }}" alt="A picture of petra laying the tarot">
                        </div>

                        <div class="twelve wide column right floated">
                            <p>@lang('content.divination_paragraph_5')</p>
                        </div>
                    </div>

                    <div class="ui divider"></div>

                    <div class="sixteen wide row">
                        <div class="sixteen wide column centered">
                            <p>@lang('content.divination_paragraph_6')</p>
                            <p>@lang('content.divination_paragraph_7')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection