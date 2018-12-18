@extends('layouts.admin')
@section('content')
    <section id="reviews">
        <div class="ui container">
            <h1>Huidige reviews</h1>
            <div class="reviews">
                @foreach($aReviews as $oReview)
                    @if(isset($iToUpdate) and $iToUpdate == $oReview->id)
                        <div class="ui card" style="max-width: 100%; min-width: 100%;">
                            <div class="content">
                                {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post', 'class' => 'ui form']) }}
                                    <div class="field">
                                        {{ Form::label('name', 'Naam') }}
                                        {{ Form::text('name', $oReview->name, ['class' => 'form-control', 'required']) }}
                                    </div>
                                    <div class="field">
                                        {{ Form::label('rating', 'Aanbeveling') }}
                                        <select name="rating" value="{{ $oReview->rating }}">
                                            @for($i = 5; $i > 0; $i--)
                                                <option value="{{ $i }}">{{ __("forms.review-recommendation-$i") }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="field">
                                        {{ Form::label('review', 'Beschrijving') }}
                                        {{ Form::textArea('review', $oReview->review, ['class' => 'form-control', 'required']) }}
                                    </div>
                                <button class="ui button" type="submit" name="status" value="save-update-{{ $oReview->id }}">Review Opslaan</button>
                                <button class="ui button" type="submit" name="status" value="drop-{{ $oReview->id }}">Review Verwijderen</button>
                                {{ Form::close() }}
                            </div>
                        </div>
                    @else
                        <div class="ui card" style="max-width: 100%; min-width: 100%;">
                            <div class="content">
                                <div class="header">
                                    <span>{{ $oReview->name }}</span>
                                    <span style="position: absolute; right: 2rem">
                                        @for($i = 0; $i < $oReview->rating;$i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    </span>
                                </div>

                                <div class="description">{{ $oReview->review }}
                                    {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post', 'class' => 'ui form']) }}
                                        <button class="ui button" type="submit" name="status" value="update-{{ $oReview->id }}">Review aanpassen</button>
                                        <button class="ui button" type="submit" name="status" value="drop-{{ $oReview->id }}">Review Verwijderen</button>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                @if(isset($sStatus) and $sStatus == 'new')
                    <div class="ui card" style="max-width: 100%; min-width: 100%;">
                        <div class="content">
                            <div class="header">Nieuwe review</div>
                            <div class="description">
                                {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post', 'class' => 'ui form']) }}
                                    <div class="field">
                                        {{ Form::label('name', 'Naam') }}
                                        {{ Form::text('name', '', ['class' => 'form-control', 'required']) }}
                                    </div>
                                    <div class="field">
                                        {{ Form::label('rating', 'Aanbeveling') }}
                                        <select name="rating">
                                            @for($i = 5; $i > 0; $i--)
                                                <option value="{{ $i }}">{{ __("forms.review-recommendation-$i") }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="field">
                                        {{ Form::label('review', 'Beschrijving') }}
                                        {{ Form::textArea('review', '', ['class' => 'form-control', 'required']) }}
                                    </div>
                                    <button class="ui button" type="submit" name="status" value="save-new">Review Toevoegen</button>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    @else
                    <div id="new-review" class="review">
                        {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                        <button class="ui button" type="submit" name="status" value="new">Nieuwe Review Aanmaken</button>
                        {{ Form::close() }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection