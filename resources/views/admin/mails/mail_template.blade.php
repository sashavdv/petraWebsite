@extends('layouts.admin')

@section('content')
    <section id="header">
        <div class="ui container">
            <h1>Email template</h1>
            <a class="ui primary button" href="/admin/mail/template/edit">Aanpassen <i class="fas fa-pen pl-5"></i></a>
        </div>
    </section>

    <div class="ui divider"></div>

    <section id="template-edit">
        <div class="ui container">
            <div>
                {!! $oMailTemplateData->mail_head !!}
            </div>

            <table class="ui celled table mail-template">
                <thead>
                <tr>
                    <th>Date / Datum</th>
                    <th>Title / Titel</th>
                    <th>Category / Categorie</th>
                    <th>Price / Prijs</th>
                </tr>
                <tr>
                    <th colspan="4">Description / Beschrijving</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Event::getMonthlyEvents() as $oEvent)
                    <tr style="background-color: lightgray;">
                        <td>{{ $oEvent->date }} {{ $oEvent->event_time }}</td>
                        <td>{{ $oEvent->title }}</td>
                        <td>{{ $oEvent->type }}</td>
                        <td>€{{ $oEvent->price }}</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p>{{ $oEvent->description_en }}</p>
                            <p>{{ $oEvent->description_nl }}</p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div>
                {!! $oMailTemplateData->mail_foot !!}
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trumbowyg.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/trumbowyg.js') }}"></script>
    <script>
        {{-- Set svg icons for Trumbowyg --}}
        $.trumbowyg.svgPath = '{{ asset('images/trumbowyg/icons.svg') }}';
        $('.editor').trumbowyg();
    </script>
@endsection