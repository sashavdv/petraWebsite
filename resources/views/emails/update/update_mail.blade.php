<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div style="
        display: block;
        width: 80%;
        max-width: 1200px;
        min-width: 400px;
        margin: 0 auto;
    ">
        <h1>Volgende evenementen</h1>
        @foreach($aEvents as $oEvent)
        <div class="ui card event-card">
            <div class="content">
                <div class="header">
                    <span>{{ $oEvent->title }}</span>
                    <span>€{{ $oEvent->price }}</span>
                </div>
                <div class="meta">
                    <span>{{ $oEvent->date }} {{ $oEvent->event_time }}</span>
                    <span>{{ $oEvent->type }}</span>
                </div>
                <div class="description">
                    <span>NL</span>
                    <p>{{ $oEvent->description_nl }}</p>
                    <div class="ui divider"></div>
                    <span>EN</span>
                    <p>{{ $oEvent->description_en }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</body>
</html>