<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">
</head>
<body>
    @foreach($aEvents as $oEvent)
        <div class="ui card event-card">
            <div class="content">
                <span>{{ $oEvent->title }}</span>
                <span>€{{ $oEvent->price }}</span>
            </div>
        </div>
    @endforeach
</body>
</html>