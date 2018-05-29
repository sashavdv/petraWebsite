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

</head>
<body>
    <header>
        @include('layouts.inc.menu')
    </header>

    @include('layouts.inc.calendar')

    <div class="container">
                @yield('content')
    </div>
    <footer>
            @include('layouts.inc.footer')
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="{{ asset('js/clndr.js') }}"></script>
    <script type="text/javascript">
        var calendars = {};

        $(document).ready(function () {
            console.log('Page loaded');

            var eventArray = [];

            calendars.clndr = $('.calendar').clndr({
                events: eventArray,
                clickEvents: {
                    nextMonth: function () {
                        console.log('Next Month');
                    },
                    previousMonth: function () {
                        console.log('Previous Month');
                    }
                },
                showAdjacentMonths: true,
                adjacentDaysChangeMonth: false
            });
        });
    </script>
</body>
</html>
