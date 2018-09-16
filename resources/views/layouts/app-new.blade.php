<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <nav id="top-nav" class="nav-top">
        <ul>
            <li><a href="/"><img /></a></li>
            <li><a href="beauty"><span>@lang('nav.beauty')</span><img ></a></li>
            <li><a href="relaxation"><span>@lang('nav.relaxation')</span><img ></a></li>
            <li><a href="divination"><span>@lang('nav.divination')</span><img ></a></li>
        </ul>
        <button id="nav-open" onclick="toggleSideNav()">@lang('nav.more')</button>
    </nav>
    <nav id="side-nav" class="nav-side hidden">
        <button id="nav-close" onclick="toggleSideNav()">@lang('nav.less')</button>
        <ul>
            <li><a href="about">Over mij</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Tarieven</a></li>
            <li><a href="#">Praktisch</a></li>
        </ul>
        <span class="lang">NL - FR</span>
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
                    <li>Kiewitstraat 43, 3500 Hasselt</li>
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

            if (sideNav.classList.contains('hidden')) {
                sideNav.classList.remove('hidden');
                sideNav.classList.add('visible');
            }
            else if (sideNav.classList.contains('visible')) {
                sideNav.classList.remove('visible');
                sideNav.classList.add('hidden');
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src=" {{asset('js/custom.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="{{ asset('js/clndr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/clndr-custom.js') }}" type="text/javascript"></script>
</body>
</html>