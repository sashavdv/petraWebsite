<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #f3f3f3;
        }
        nav.nav-top {
            background-color: #fcd51b;
            height: 60px;
            position: fixed;
            top: 0;
            width: 100vw;
            box-shadow: 0 3px 6px rgba(0,0,0,0.16);
            overflow: hidden;
        }
        nav.nav-top ul {
            list-style-type: none;
        }
        nav.nav-top ul li {
            float: left;
        }
        nav.nav-top li span {
            text-align: center;
            display: inline-block;
            width: 150px;
            height: 60px;
            margin-top: -6%;
            font-size: 1.2em;
            vertical-align: middle;
        }
        nav.nav-top li img {
            width: 60px;
            height: 60px;
        }
        #nav-open {
            float: right;
            height: 60px;
            margin-right: 30px;
            font-size: 1.2em;
            border: none;
            background-color: transparent;
        }
        #nav-close {
            height: 60px;
            margin-left: 30px;
            font-size: 1.2em;
            border: none;
            background-color: transparent;
        }

        nav.nav-side {
            position: fixed;
            top: 0;
            width: 200px;
            height: 100%;
            background-color: #fcd51b;
            box-shadow: -3px 0 6px rgba(0,0,0,0.16);
            transition: all 0.15s ease-in-out;
        }
        nav.nav-side.visible {
            right: 0;

        }
        nav.nav-side.hidden {
            right: -203px;
        }
        nav.nav-side ul{
            list-style-type: none;
        }
        nav.nav-side li {
            border-top: 1px solid rgba(255,255,255,0.4);
            padding-left: 30px;
            line-height: 50px;
        }
        span.lang {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
        
        nav a {
            text-decoration: none;
            color: #000;
        }

        #app {
            margin-top: 60px;
            min-height: 800px;
            background-color: #f3f3f3;
        }

        footer {
            background-color: #fcd51b;
            box-shadow: 3px 0 6px rgba(0,0,0,0.16);
        }
        footer p {
            line-height: 40px;
            text-align: center;
            border-bottom: 2px solid black;
        }
        div.footer-info-left, div.footer-info-right {
            width: 50%;
            float: left;
            line-height: 30px;
        }
        div.footer-info ul {
            margin: 20px 0 20px;
            list-style-type: none;
        }
        div.footer-info-left ul {
            float: right;
            width: 50%;
            padding-bottom: 30px;
            border-bottom: 1px solid black;
        }
        div.footer-info-right ul {
            width: 50%;
            text-align: right;
            padding-bottom: 30px;
            border-bottom: 1px solid black;
        }
        div.social ul {
            list-style-type: none;
            display: block;
            text-align: center;
        }
        div.social ul li {
            display: inline;
            margin: 0 20px;
        }
        span.copy {
            text-align: center;
            display: block;
            margin-top: 20px;
            line-height: 50px;
            background-color: #fcd51b;
        }
    </style>
</head>
<body>
    <nav id="top-nav" class="nav-top">
        <ul>
            <li><a href="#"><img /></a></li>
            <li><a href="beauty"><span>@lang('nav.beauty')</span><img ></a></li>
            <li><a href="relaxation"><span>@lang('nav.relaxation')</span><img ></a></li>
            <li><a href="divination"><span>@lang('nav.divination')</span><img ></a></li>
        </ul>
        <button id="nav-open" onclick="toggleSideNav()">@lang('nav.more')</button>
    </nav>
    <nav id="side-nav" class="nav-side hidden">
        <button id="nav-close" onclick="toggleSideNav()">@lang('nav.less')</button>
        <ul>
            <li><a href="#">Over mij</a></li>
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
</body>
</html>