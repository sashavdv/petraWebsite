@extends('layouts.admin')
@section('content')
    <section id="reviews">
        <div class="container">
            <h2>Pluimpjes</h2>
            <div class="reviews">
                @foreach($aReviews as $oReview)
                    @if(Session::has('update-review') and (Session::get('update-review') == $oReview->id))
                        <div id="edit-review" class="review">
                            {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                            <div class="form-group">
                                {{ Form::label('title' , __('forms.review-title')) }}
                                {{ Form::text('title' , $oReview->title, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('name' , __('forms.review-name')) }}
                                {{ Form::text('title' , $oReview->name, ['class' => 'form-control', 'required']) }}
                            </div>
                            <button type="submit" name="status" value="update-{{ $oReview->id }}" class="form-control">Wijzigingen opslaan</button>
                            {{ Form::close() }}
                        </div>
                    @else
                        <div id="review{{ $oReview->id }}" class="review">
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
                            </span>
                            @endif
                            <p class="rev-content">{{ $oReview->review }}</p>
                                {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                                <button type="submit" name="status" value="edit-{{ $oReview->id }}" class="form-control">Review aanpassen</button>
                                {{ Form::close() }}
                        </div>
                    @endif
                @endforeach
                @if(Session::has('write-review'))
                    <div id="new-review" class="review">
                        {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                        <div class="form-group">
                            {{ Form::label('title', __('forms.review-title')) }}
                            {{ Form::text('title', '', ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name', __('forms.review-name')) }}
                            {{ Form::text('name', '', ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('rating', __('forms.review-recommendation')) }}
                            <select name="rating" class="form-control" required>
                                @for($i = 5; $i > 0; $i--)
                                    <option value="{{ $i }}">
                                        {{ __("forms.review-recommendation-$i") }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            {{ Form::label('review', __('forms.review-description')) }}
                            {{ Form::textArea('review', '', ['class' => 'form-control', 'required']) }}
                        </div>
                        <button type="submit" name="status" value="add" class="form-control">Review toevoegen</button>
                        {{ Form::close() }}
                    </div>
                @else
                    <div id="new-review" class="review">
                        {{ Form::open(['action' => 'AdminReviewController@writeReview', 'method' => 'post']) }}
                        <button type="submit" name="status" value="new" class="form-control">Laat een review achter</button>
                        {{ Form::close() }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection