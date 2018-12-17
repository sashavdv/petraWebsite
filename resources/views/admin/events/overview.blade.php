@extends('layouts.admin')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Datum</th>
            <th>Titel</th>
            <th>Categorie</th>
            <th>Prijs</th>
            <th>Actie</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aEvents as $oEvent)
            <tr>
                <td>{{ $oEvent->date }} {{ $oEvent->event_time }}</td>
                <td>{{ $oEvent->title }}</td>
                <td>{{ $oEvent->type }}</td>
                <td>{{ $oEvent->price }}</td>
                <td>
                    <a href="/admin/events/edit/{{ $oEvent->id }}">Aanpassen</a>
                    <button type="button" onclick="confirmDelte({{ $oEvent }})">Verwijderen</button>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">
                <a href="/admin/events/add">Nieuw evenement</a>
            </td>
        </tr>
        </tfoot>
    </table>
@endsection

@section('scripts')
    <script>
        function confirmDelte(eventEntry) {
            if (confirm('Bent u zeker dat u ' + eventEntry.title + 'wilt verwijderen?')) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: 'events/remove/',
                    type: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        eventId: eventEntry.id,
                    },
                    success: function (response) {location.reload();},
                    error: function (response) {console.log(response);}
                })
            }
        }
    </script>
@endsection