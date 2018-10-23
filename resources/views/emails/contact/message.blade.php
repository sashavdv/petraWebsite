<div>
    <p><b>Info verzender:</b></p>
    <ul>
        <li><b>Naam:</b>{{ $firstName }} {{ $lastName }}</li>
        <li><b>Email:</b> {{ $email }}</li>
        <li><b>Telefoon:</b> {{ $phone }}</li>
        @if($subscription)
            <?php
                $event = \App\Event::where('title', $subject)->first();
            ?>
            <li><b>Inschrijving:</b> {{ $subject }}, {{ $event->date }}, {{ $event->event_time }}</li>

        @else
            <li><b>Onderwerp:</b> {{ $subject }}</li>
        @endif
    </ul>
</div>
<div>
    <p><b>Berricht:</b></p>
    <p>{{ $description }}</p>
</div>
<div>
    @if($lang == 'nl')
        <p><b>Verzonden vanaf website</b></p>
        @else
        <p><b>Sent form website</b></p>
    @endif
</div>