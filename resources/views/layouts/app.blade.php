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
    <div id="content-section" class="row">
        <article id="content" class="col-8 offset-1">
            @yield('content')
        </article>
        <div id="calendar" class="col-2 offset-1">
            <table>
                <thead>
                <tr>
                    <td colspan="3">May</td>
                </tr>
                <tr>
                    <td><button id="previous-button">&lt;</button></td>
                    <td>14 tot 20</td>
                    <td><button id="next-button">&gt;</button></td>
                </tr>
                </thead>
            </table>
        </div>
        <footer>
            @include('layouts.inc.footer')
        </footer>
    </div>

</body>
</html>
