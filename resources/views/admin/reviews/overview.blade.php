@extends('layouts.admin')

@section('content')
    <section id="header">
        <div class="ui container">
            <h1>Reviews</h1>
            <a class="ui primary button" href="/admin/reviews/add">Nieuwe review <i class="fas fa-plus pl-5"></i></a>
        </div>
    </section>

    <div class="ui divider"></div>

    <section>
        <div class="ui container">
            @foreach($aReviews as $oReview)
                <div class="ui card" style="max-width: 100%; min-width: 100%;">
                    <div class="content">
                        <div class="ui items">
                            <div class="item">
                                <div class="ui small image">
                                    @if($oReview->photo)
                                        <img class="ui large rounded image" src="storage/photos/{{ $oReview->photo }}"/>
                                    @else
                                        <img class="ui large rounded image" src="{{ asset("images/person-placeholder.jpg") }}"/>
                                    @endif
                                </div>
                                <div class="content">
                                    <div class="header">
                                        <span>{{ $oReview->name }}</span>
                                        <span style="position: absolute; right: 2rem">
                                            @for($i = 0; $i < $oReview->rating;$i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </span>
                                    </div>
                                    <div class="meta">{{ $oReview->job }}</div>
                                    <div class="description">{{ $oReview->review }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="extra content">
                        <a class="ui primary button" href="/admin/reviews/edit/{{ $oReview->id }}">Aanpassen <i class="fas fa-pen pl-5"></i></a>
                        <button class="ui negative button" type="button" onclick="confirmDelte({{ $oReview }})">Verwijderen <i class="fas fa-trash pl-5"></i></button>
                    </div>
                </div>
            @endforeach
            {{ $aReviews->links() }}
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function confirmDelte(reviewEntry) {
            if (confirm('Bent u zeker dat u deze review wilt verwijderen?')) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: 'reviews/remove/',
                    type: 'POST',
                    data: {
                        _token: CSRF_TOKEN,
                        reviewId: reviewEntry.id,
                    },
                    success: function (response) {location.reload();},
                    error: function (response) {console.log(response);}
                })
            }
        }
    </script>
@endsection