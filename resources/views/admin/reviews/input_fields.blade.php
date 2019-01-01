@extends('layouts.admin')

@section('content')
    {{ Form::open(['action' => 'AdminReviewController@saveReview', 'method' => 'post', 'class' => 'ui form', 'enctype' => 'multipart/form-data']) }}

    <section id="header">
        <div class="ui container">
            <h1>Review aanmaken/bewerken</h1>
            <button class="ui primary button" type="submit">Opslaan <i class="fas fa-save pl-5"></i></button>
            <a class="ui negative button" href="/admin/reviews">Annuleren <i class="fas fa-ban pl-5"></i></a>
        </div>
    </section>

    <div class="ui divider"></div>

    <section>
        <div class="ui container">
            {{ Form::hidden('id', $oReviewData->id) }}
            <div class="field">
                {{ Form::label('name', 'Naam*') }}
                {{ Form::text('name', $oReviewData->name, ['required']) }}
            </div>
            <div class="field">
                {{ Form::label('job', 'Beroep') }}
                {{ Form::text('job', $oReviewData->job) }}
            </div>
            <div class="field">
                {{ Form::label('photo', 'Foto') }}
                {{ Form::file('photo') }}
            </div>
            <div class="field">
                {{ Form::label('rating', 'Score') }}
                <div class="ui selection dropdown">
                    <input type="hidden" name="rating" value="{{ $oReviewData->rating }}">
                    <i class="dropdown icon"></i>
                    <div class="default text">Selecteer een beoordeling</div>
                    <div class="menu">
                        @for($i=5;$i>0;$i--)
                            <div class="item" data-value="{{ $i }}">
                                @for($j=$i;$j>0;$j--)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="field">
                {{ Form::label('review', 'Review*') }}
                {{ Form::textarea('review', $oReviewData->review, ['required']) }}
            </div>
        </div>
    </section>

    {{ Form::close() }}
@endsection

@section('scripts')
    <script>
        $('.ui.dropdown').dropdown();
    </script>
@endsection