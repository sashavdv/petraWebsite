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
        <article id="content" class="col-9">
            <div class="container">
                @yield('content')
            </div>
        </article>
        <div id="calendar" class="col-3">
            <div class="container">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="150">Datum</th>
                        <th>Beschrijving</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $aAgendaData = App\Agenda::where('date', '>', \Carbon\Carbon::now())->  orderBy('date')->get();
                    ?>
                    @foreach($aAgendaData as $oAgendaData)
                    <tr>
                        <td>{{ $oAgendaData->date }}</td>
                        <td>{{ $oAgendaData->description }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <table id="calendar">
                    <thead>
                    <tr>
                        <th colspan="3" id="month"></th>
                    </tr>
                    <tr>
                        <th><button>&lt;</button></th>
                        <th id="week"></th>
                        <th><button>&gt;</button></th>
                    </tr>
                    </thead>
                    <tbody id="days">
                    </tbody>
                </table>
                <style>
                    #calendar{
                        display: block;
                        width: 330px;
                    }
                    #calendar thead th{
                        text-align: center;
                    }
                    #calendar tr{
                        height: 50px;
                        background-color: white;
                    }
                    #calendar thead tr:first-child{
                        font-size: 22px;
                    }
                    #calendar thead tr:last-child{
                        height: 40px;
                        font-size: 18px;
                    }
                    #calendar td, #calendar th{
                        width: 110px;
                    }
                    #calendar button{
                        display: block;
                        width: 110px;
                        background-color: white;
                        border: none;
                    }
                    #calendar thead{
                        border-bottom: 1px solid black;
                    }
                    #calendar tr td:first-child{
                        text-indent: 20px;
                    }
                    #calendar tr.current-date{
                        background-color: lightblue;
                    }
                </style>
                <script type="text/javascript">
                    var months = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'October', 'November', 'December'];
                    var days = ['Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za', 'Zo'];
                    var agendaDays = <?php echo $aAgendaData; ?>;

                    var currentDate = new Date();

                    var monday = getMondayOfCurrentWeek(currentDate);
                    var sunday = getSundayOfCurrentWeek(currentDate);

                    var table = document.getElementById('days');
                    for (var day in days.reverse()){
                        var row = table.insertRow(0);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        cell1.innerHTML = days[day] + ' ' + (monday.getDate() + (6 - day));
                        if ((monday.getDate() + (6 - day)) == currentDate.getDate()){
                            row.classList.add('current-date');
                        }
                    }

                    document.getElementById('month').innerHTML = months[currentDate.getMonth()];
                    document.getElementById('week').innerText = monday.getDate() + " tot " + sunday.getDate();

                    console.log("This Monday: " + monday);
                    console.log("Today: " + currentDate);
                    console.log("This Sunday: " + sunday);
                    console.log(agendaDays);

                    function getMondayOfCurrentWeek(d)
                    {
                        var day = d.getDay();
                        return new Date(d.getFullYear(), d.getMonth(), d.getDate() + (day == 0?-6:1)-day );
                    }

                    function getSundayOfCurrentWeek(d)
                    {
                        var day = d.getDay();
                        return new Date(d.getFullYear(), d.getMonth(), d.getDate() + (day == 0?0:7)-day );
                    }
                </script>
            </div>
        </div>
        <footer>
            @include('layouts.inc.footer')
        </footer>
    </div>

</body>
</html>
