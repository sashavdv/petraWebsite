<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminReviewController extends Controller
{
    public function index() {
        $aReviews = Review::get();

        return view('admin.reviews', [
            'aReviews' => $aReviews,
        ]);
    }

    public function writeReview(Request $request) {
        if ($request->post('title') != null) {
            Review::insert([
                'title' => $request->post('title'),
                'name' => $request->post('name'),
                'rating' => $request->post('rating'),
                'review' => $request->post('review'),
            ]);
            return redirect('/admin/reviews');
        }
        else {
            if (!Session::has('write-review')) {
                Session::flash('write-review');
                return redirect('/admin/reviews#new-review');
            }
        }
    }

    public function updateReview(Request $request) {

    }
}
