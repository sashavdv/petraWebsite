@extends('layouts.admin')
@section('content')
    <section id="reviews">
        <div class="container">
            <div class="reviews">
                @foreach($aReviews as $oReview)
                    @if(isset($iToUpdate) and $iToUpdate == $oReview->id)
                        <div id="update-review" class="review">
                            {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                            {{ Form::label('title', 'Titel') }}
                            {{ Form::text('title', $oReview->title, ['class' => 'form-control', 'required']) }}
                            {{ Form::label('name', 'Naam') }}
                            {{ Form::text('name', $oReview->name, ['class' => 'form-control', 'required']) }}
                            {{ Form::label('rating', 'Aanbeveling') }}
                            <select name="rating" class="form-control" value="{{ $oReview->rating }}">
                                @for($i = 5; $i > 0; $i--)
                                    <option value="{{ $i }}">{{ __("forms.review-recommendation-$i") }}</option>
                                @endfor
                            </select>
                            {{ Form::label('review', 'Beschrijving') }}
                            {{ Form::textArea('review', $oReview->review, ['class' => 'form-control', 'required']) }}
                            <button type="submit" name="status" value="save-update-{{ $oReview->id }}" class="form-control">Review Opslaan</button>
                            <button type="submit" name="status" value="drop-{{ $oReview->id }}" class="form-control">Review Verwijderen</button>
                            {{ Form::close() }}
                        </div>
                    @else
                        <div id="review{{ $oReview->id }}" class="review admin-review">
                            {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                            @if($oReview->title != null)
                                <span class="rev-title">{{ $oReview->title }}</span>
                            @endif
                            <span class="rev-name">{{ $oReview->name }}</span>
                            @if($oReview->rating != null)
                                <span class="rev-stars">
                               @for($i = 0; $i < 5;$i++)
                                        @if($oReview->rating > $i)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                    @endif
                            </span>
                            <p class="rev-content">{{ $oReview->review }}</p>
                                <button type="submit" name="status" value="update-{{ $oReview->id }}" class="form-control">Review aanpassen</button>
                                <button type="submit" name="status" value="drop-{{ $oReview->id }}" class="form-control">Review Verwijderen</button>
                                {{ Form::close() }}
                        </div>
                    @endif
                @endforeach

                @if(isset($sStatus) and $sStatus == 'new')
                    <div id="new-review-form" class="review">
                        {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                        <span class="form-title">Nieuwe review</span>
                        <div class="form-group">
                            {{ Form::label('title', 'Titel') }}
                            {{ Form::text('title', '', ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name', 'Naam') }}
                            {{ Form::text('name', '', ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('rating', 'Aanbeveling') }}
                            <select name="rating" class="form-control">
                                @for($i = 5; $i > 0; $i--)
                                    <option value="{{ $i }}">{{ __("forms.review-recommendation-$i") }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            {{ Form::label('review', 'Beschrijving') }}
                            {{ Form::textArea('review', '', ['class' => 'form-control', 'required']) }}
                        </div>
                        <button type="submit" name="status" value="save-new" class="form-control">Review Toevoegen</button>
                        {{ Form::close() }}
                    </div>
                    @else
                    <div id="new-review" class="review">
                        {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                        <button type="submit" name="status" value="new" class="form-control">Nieuwe Review Aanmaken</button>
                        {{ Form::close() }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection