<div>
    <p><b>Info verzender:</b></p>
    <ul>
        <li><b>Naam:</b>{{ $firstName }} {{ $lastName }}</li>
        <li><b>Email:</b> {{ $email }}</li>
        <li><b>Telefoon:</b> {{ $phone }}</li>
        <li><b>Onderwerp:</b> {{ $subject }}</li>
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