<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (!Auth::check()) {
            return redirect('login');
        }

        if ($request->post('status') == 'new') {
            Session::flush();
            Session::flash('write-review');

            return redirect('/admin/reviews#new-review');
        }

        if ($request->post('status') == 'add') {
            Session::flush();

            Review::insert([
                'title' => $request->post('title'),
                'name' => $request->post('name'),
                'rating' => $request->post('rating'),
                'review' => $request->post('review'),
            ]);

            return redirect('/admin/reviews');
        }

        if (substr($request->post('status'), 0, 4) === "edit") {
            Session::flush();

            $aSplit = str_split($request->post('status'));
            $iId = $aSplit[count($aSplit) - 1];

            Session::flash('edit-review' , $iId);

            return redirect('/admin/reviews#edit-review');
        }

        if (substr($request->post('status'), 0, 6) === "update") {
            Session::flush();

            $aSplit = str_split($request->post('status'));
            $iId = $aSplit[count($aSplit) - 1];

            Review::where('id', $iId)->update([
                'title' => $request->post('title'),
                'name' => $request->post('name'),
                'rating' => $request->post('rating'),
                'review' => $request->post('review'),
            ]);

            return redirect('/admin/reviews');
        }
    }

    public function updateReview(Request $request) {

    }
}
