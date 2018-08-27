<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>

</head>
<body>
    <header>
        @include('layouts.inc.menu')
    </header>


    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @yield('content')
            </div>
            <div class="col-lg-3 text-center">

                @include('layouts.inc.calendar')
            </div>
        </div>
    </div>
    <footer>
            @include('layouts.inc.footer')
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="{{ asset('js/clndr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/clndr-custom.js') }}" type="text/javascript"></script>
    <script srd="{{ asset('js/leaflet.jd') }}" type="text/javascript"></script>
    <script srd="{{ asset('js/leaflet-src.jd') }}" type="text/javascript"></script>
</body>
</html>
