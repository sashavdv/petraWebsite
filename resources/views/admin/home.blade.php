@extends('layouts.admin')

{{--@section('content')--}}
    {{--<section id="participants">--}}
        {{--<div class="ui container">--}}
            {{--<h1>Opgeslagen personen</h1>--}}
            {{--<a class="ui primary button" href="/admin/updatemail/send">Verstuur updatemail <i class="fas fa-envelope pl-5"></i></a>--}}
            {{--<table class="ui table">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>#</th>--}}
                    {{--<th>Voornaam</th>--}}
                    {{--<th>Achternaam</th>--}}
                    {{--<th>Email</th>--}}
                    {{--<th>Tel</th>--}}
                    {{--<th>Actie</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($aParticipants as $oParticipant)--}}
                    {{--<tr>--}}
                        {{--<td>{{$oParticipant->id }}</td>--}}
                        {{--<td>{{$oParticipant->name_first }}</td>--}}
                        {{--<td>{{$oParticipant->name_last }}</td>--}}
                        {{--<td>{{$oParticipant->email }}</td>--}}
                        {{--<td>{{$oParticipant->phone }}</td>--}}
                        {{--<td><button class="ui negative button" onclick="confirmDelte({{ $oParticipant }})">Verwijderen <i class="fas fa-trash pl-5"></i></button></td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--</tbody>--}}
            {{--</table>--}}
            {{--{{ $aParticipants->links() }}--}}
        {{--</div>--}}
    {{--</section>--}}
{{--@endsection--}}

{{--@section('scripts')--}}
    {{--<script>--}}
        {{--function confirmDelte(participantEntry) {--}}
            {{--if (confirm('Bent u zeker dat u ' + participantEntry.name_last + ' ' + participantEntry.name_first + ' wilt verwijderen?')) {--}}
                {{--var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');--}}
                {{--$.ajax({--}}
                    {{--url: 'admin/removeParticipant/',--}}
                    {{--type: 'POST',--}}
                    {{--data: {--}}
                        {{--_token: CSRF_TOKEN,--}}
                        {{--participantId: participantEntry.id,--}}
                    {{--},--}}
                    {{--success: function (response) {location.reload();},--}}
                    {{--error: function (response) {console.log(response);}--}}
                {{--})--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}
{{--@endsection--}}