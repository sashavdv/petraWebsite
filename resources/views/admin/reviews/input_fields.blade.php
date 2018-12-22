@extends('layouts.admin')

@section('content')
    <section>
        <div class="ui container">
            <h1>Review aanmaken/bewerken</h1>
            {{ Form::open(['action' => 'AdminReviewController@saveReview', 'method' => 'post', 'class' => 'ui form']) }}
            {{ Form::hidden('id', $oReviewData->id) }}
            <div class="field">
                {{ Form::label('name', 'Naam') }}
                {{ Form::text('name', $oReviewData->name, ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="field">
                {{ Form::label('rating', 'Categorie') }}
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
                {{ Form::label('review', 'Review') }}
                {{ Form::textarea('review', $oReviewData->review, ['class' => 'form-control', 'required']) }}
            </div>
            <button class="ui primary button" type="submit">Opslaan</button>
            <a class="ui negative button" href="/admin/reviews">Annuleren</a>
            {{ Form::close() }}
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('.ui.dropdown').dropdown();
    </script>
@endsection