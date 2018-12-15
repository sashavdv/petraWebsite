@extends('layouts.admin')
@section('content')
    <section id="participants">
        <div class="container">
            <h1>Opgeslagen personen</h1>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Tel</th>
                </tr>
                </thead>
                <tbody>
                @foreach($aParticipants as $oParticipant)
                    <tr>
                        <td>{{$oParticipant->id }}</td>
                        <td>{{$oParticipant->name_first }}</td>
                        <td>{{$oParticipant->name_last }}</td>
                        <td>{{$oParticipant->email }}</td>
                        <td>{{$oParticipant->phone }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section id="update-mail">
        <h1>Updatemail versturen</h1>
        <a href="/admin/updatemail/send">Verstuur mail</a>
    </section>
@endsection