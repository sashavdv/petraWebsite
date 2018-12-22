<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        @if (isset($sPageTitle))
            @lang("nav.$sPageTitle") -
        @endif
        {{ config('app.name') }}
    </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('js/semantic.min.js') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{--<script src="{{ asset('js/bootstrap.js') }}" defer></script>--}}
    {{--<script src=" {{asset('js/custom.js')}}" defer></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    {{--<script src="{{ asset('js/clndr.js') }}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('js/clndr-custom.js') }}" type="text/javascript"></script>--}}
</head>
<body>
    <nav id="nav-top" class="ui stackable menu petra-primary">
        <div class="ui container">
            <a class="item" href="/admin">Dashboard</a>
            <a class="item" href="/admin/reviews">Reviews</a>
            <a class="item" href="/admin/events">Agenda</a>
        </div>
    </nav>

    <div id="app">
        @yield('content')
    </div>

@yield('scripts')
</body>
</html>