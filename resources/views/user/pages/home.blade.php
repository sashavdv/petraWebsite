@extends('layouts.app')
@section('content')

    <section id="about" class="bkg-white">
        <div class="container">
            <h2>@lang('titles.about')</h2>
            <p>@lang('content.about')</p>
        </div>
    </section>
    @component('layouts.inc.modal')
  
        @endcomponent
    <section id="events" class="bkg-blue">
        <div class="container">
            <h2>@lang('titles.events')</h2>
            <div class="row">
                <div class="col">
                    <div class="cal1 mx-auto"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="bkg-yellow">
        <div class="container">
            <h2>@lang('titles.reviews')</h2>
            <div class="reviews">
                @foreach ($aReviews as $oReview)
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
                </div>
                @endforeach
                @if(Session::has('write-review'))
                    <div id="new-review" class="review">
                        {{ Form::open(['action' => 'WelcomeController@writeReview', 'method' => 'post']) }}
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
                        {{ Form::submit(__('forms.review-confirm'), ['class' => 'form-control']) }}
                        {{ Form::close() }}
                    </div>
                    @else
                    <div id="new-review" class="review">
                        {{ Form::open(['action' => 'WelcomeController@writeReview', 'method' => 'post']) }}
                        {{ Form::submit(__('forms.review-create'), ['class' => 'form-control']) }}
                        {{ Form::close() }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection