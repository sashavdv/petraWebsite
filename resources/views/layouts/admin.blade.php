<!doctype html>
<html>
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

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src=" {{asset('js/custom.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="{{ asset('js/clndr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/clndr-custom.js') }}" type="text/javascript"></script>
</head>
<body>
    <nav id="top-nav" class="nav-top">
        <ul>
            <a href="/admin/reviews"><li><span>Reviews</span></li></a>
            <a href="/admin/events"><li><span>Agenda</span></li></a>
        </ul>
    </nav>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>