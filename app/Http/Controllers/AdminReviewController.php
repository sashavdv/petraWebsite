<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminReviewController extends Controller
{
    public function index() {
        $aReviews = Review::paginate(3);

        return view('admin.reviews.overview', [
            'aReviews' => $aReviews,
        ]);
    }

    public function removeReview(Request $request) {
        Review::destroy($request->post('reviewId'));

        return response()->json([
            'success' => true,
        ]);
    }

    public function editReviewForm($iReviewId = null) {
        return $this->displayInputForm(Review::find($iReviewId));
    }

    public function addReviewForm() {
        return $this->displayInputForm();
    }

    private function displayInputForm($oReviewData = null) {
        if ($oReviewData == null) $oReviewData = new Review;

        return view('admin.reviews.input_fields', [
            'oReviewData' => $oReviewData,
        ]);
    }

    public function saveReview(Request $request) {
        if ($request->post('id') == null) {
            $oReview = new Review;
        }
        else {
            $oReview = Review::find($request->post('id'));
        }

        $oReview->name = $request->post('name');
        $oReview->rating = $request->post('rating');
        $oReview->review = $request->post('review');

        $oReview->save();

        return redirect()->route('admin_reviews');
    }
}
