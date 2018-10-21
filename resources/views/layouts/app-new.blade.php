<!doctype html>
<?php
    $lang = Cookie::get('lang');
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src=" {{asset('js/custom.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <script src="{{ asset('js/clndr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/clndr-custom.js') }}" type="text/javascript"></script>
</head>
<body>
    <nav id="top-nav" class="nav-top">
        <ul>
            <a href="/"><li><img id="logo" src="{{ asset('images/logo.png') }}" /></li></a>
            <a href="beauty"><li><span>@lang('nav.beauty')</span><img src="{{ asset('images/beauty.png') }}" ></li></a>
            <a href="relaxation"><li><span>@lang('nav.relaxation')</span><img src="{{ asset('images/relaxation.png') }}" ></li></a>
            <a href="divination"><li><span>@lang('nav.divination')</span><img src="{{ asset('images/divination.png') }}" ></li></a>
        </ul>
        <button id="nav-open" onclick="toggleSideNav()">@lang('nav.more')</button>
    </nav>
    <nav id="side-nav" class="nav-side hidden">
        <button id="nav-close" onclick="toggleSideNav()">@lang('nav.less')</button>
        <ul id="side-nav">
            <a href="about"><li>@lang('nav.about')</li></a>
            <a href="contact"><li>@lang('nav.contact')</li></a>
            <a href="prices"><li>@lang('nav.prices')</li></a>
            <a href="practical"><li>@lang('nav.practical')</li></a>
            <a href="terms"><li>Terms & agreements</li></a>
        </ul>
        <span id="lang" class="lang"><a href="lang/nl">NL</a> - <a href="lang/fr">FR</a> </span>
    </nav>

    <div id="app">
        @yield('content')
    </div>

    <footer>
        <p>You don't have to be a witch to practice magic(k)s</p>
        <div class="footer-info">
            <div class="footer-info-left">
                <ul>
                    <li>+32 123/45/67/89</li>
                    <li>test@example.com</li>
                </ul>
            </div>
            <div class="footer-info-right">
                <ul>
                    <li>BE09999999999</li>
                    <li>Grote markt 18, 3500 Hasselt</li>
                </ul>
            </div>
            <div class="social">
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                </ul>
            </div>
            <span class="copy">&copy; pure-petra.com - {{ date('Y') }}</span>
        </div>
    </footer>

    <script>
        function toggleSideNav() {
            var sideNav = document.getElementById('side-nav');
            var app = document.getElementById('app');

            if (sideNav.classList.contains('hidden')) {
                sideNav.classList.remove('hidden');
                sideNav.classList.add('visible');
                app.addEventListener('click', toggleSideNav);
            }
            else if (sideNav.classList.contains('visible')) {
                sideNav.classList.remove('visible');
                sideNav.classList.add('hidden');
                app.removeEventListener('click', toggleSideNav);
            }
        }

        // $( document ).ready(function () {
        //     var top = $('#top-nav').outerHeight();
        //     var side = $('#side-mav').outerHeight();
        //     document.getElementById('lang').style.marginTop = '100px';
        // });
    </script>
    @yield('scripts')
</body>
</html>