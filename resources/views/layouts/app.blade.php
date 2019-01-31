<!doctype html>
<?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
?>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @if (isset($sPageTitle))
            @lang("nav.$sPageTitle") -
        @endif
        {{ config('app.name') }}
    </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    @yield('styles')

</head>
<body>
    <div id="app">
        <nav id="nav-top" class="ui stackable menu petra-primary">
            <div class="ui container">
                <a class="header item" href="/" data-content="Home"><img src="{{ asset('images/logo.png') }}"/></a>
                <a class="item" href="/beauty"><span class="navbar-link">@lang('nav.beauty')</span><img src="{{ asset('images/beauty.png') }}"/></a>
                <a class="item" href="/relaxation"><span class="navbar-link">@lang('nav.relaxation')</span><img src="{{ asset('images/relaxation.png') }}"/></a>
                <a class="item" href="/divination"><span class="navbar-link">@lang('nav.divination')</span><img src="{{ asset('images/divination.png') }}"/></a>
                <a class="item" onclick="toggleSideNav()"><span class="navbar-link">@lang('nav.more')</span></a>
            </div>
        </nav>

        <div id="nav-side" class="ui sidebar vertical right menu petra-primary">
            {{--<a class="item" href="about">@lang('nav.about')</a>--}}
            <a class="item" href="contact">@lang('nav.contact')</a>
            <a class="item" href="prices">@lang('nav.prices')</a>
            <a class="item" href="practical">@lang('nav.practical')</a>
            <a class="item" href="terms">Terms & agreements</a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a class="item" href="admin">Dashboard</a>
                <a class="item" href="logout">Logout</a>
            @else
                <a class="item" href="login">Login</a>
            @endif
            <div id="lang" class="item"><a href="lang/nl">NL</a> - <a href="lang/fr">EN</a> </div>
        </div>

        <div class="pusher">
            <div id="app-content">
                @if(session('success'))
                    <div class="ui container positive message transition">
                        <div class="close icon">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="header">Bericht</div>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>

        <footer class="pb-30">
            <div class="ui container">
                <div class="ui grid">
                    <div class="sixteen wide row center aligned ">
                        <div class="sixteen wide column">
                            <p id="copy-text" style="font-size:32px;font-family: 'Dancing Script', cursive;" class="ui header">
                                "You don't have to be a witch to practice magic(k)!"
                                <img class="ui massive spaced image pb-5" src="images/logos/infinity.png" alt="infinity symbol"/>
                                Petra Stienaers
                            </p>
                        </div>
                    </div>
                    <div class="two column center aligned row">
                        <div class="column">
                            <div class="ui list">
                                <div class="item">@lang('content.phone')</div>
                                <div class="item">test@example.com</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui list">
                                <div class="item">BE06 56 82 72 83</div>
                                <div class="item">Grote Markt 18 bus 3/04, 3500 Hasselt</div>
                            </div>
                        </div>
                    </div>
                    <div class="one column center aligned row">
                        <div class="column">
                            <div class="ui horizontal list">
                                <a class="item social-media" data-content="Facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <div class="item">-</div>
                                <a class="item social-media" data-content="Youtube" href="https://youtube.coms/" target="_blank"><i class="fab fa-youtube"></i></a>
                                <div class="item">-</div>
                                <a class="item social-media" data-content="Instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="one column center aligned row">
                        <div class="column">
                            <p>&copy; purepetra.be - {{ date('Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="floating action button">
        <a href="#app" class="fab icon">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>

    @yield('modals')

    <style>
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>

    <script>
        function toggleSideNav() {
            $('.ui.sidebar').sidebar('toggle');
        }

        $('.header.item').popup();
        $('.social-media').popup();

        $('.message .close')
            .on('click', function() {
                $(this)
                    .closest('.message')
                    .transition('fade')
                ;
            })
        ;

        $('.ui.accordion')
            .accordion()
        ;
    </script>

    @yield('scripts')

</body>
</html>