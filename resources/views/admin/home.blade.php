@extends('layouts.admin')
@section('content')
    <section id="participants">
        <h2>Opgeslagen personen</h2>
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

    </section>
@endsection