@extends('layouts.admin')

@section('content')
    <section>
        <div class="ui container">
            <h1>Evenementen</h1>
            <a class="ui primary button" href="/admin/events/add">Nieuw evenement <i class="fas fa-plus pl-5"></i></a>
            <table class="ui table">
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
                        <td>{{ date_format(new DateTime($oEvent->date), 'd-m-Y') }} - {{ $oEvent->event_time }}</td>
                        <td>{{ $oEvent->title }}</td>
                        <td>{{ $oEvent->type }}</td>
                        <td>{{ $oEvent->price }}</td>
                        <td>
                            <a class="ui primary button" href="/admin/events/edit/{{ $oEvent->id }}">Aanpassen <i class="fas fa-pen pl-5"></i></a>
                            <button class="ui negative button" type="button" onclick="confirmDelte({{ $oEvent }})">Verwijderen <i class="fas fa-trash pl-5"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $aEvents->links() }}
        </div>
    </section>
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