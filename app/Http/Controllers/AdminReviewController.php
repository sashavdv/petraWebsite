<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminReviewController extends Controller
{
    public function index() {
        /*
        if (!Auth::check()) {
            return redirect('login');
        }
        */

        $aReviews = Review::get();

        return view('admin.reviews', [
            'aReviews' => $aReviews,
        ]);
    }

    public function writeReview(Request $request) {
        /*
        if (!Auth::check()) {
            return redirect('login');
        }
        */

        $aReviews = Review::get();
        $sStatus = null;
        $iToUpdate = null;

        if ($request->post('status') == 'new') {
            $sStatus = 'new';
        }

        if ($request->post('status') == 'save-new') {
            Review::insert([
                'title' => $request->post('title'),
                'name' => $request->post('name'),
                'rating' => $request->post('rating'),
                'review' => $request->post('review'),
            ]);

            return redirect('/admin/reviews');
        }

        if (substr($request->post('status'), 0, 6) == 'update') {
            $iToUpdate = substr($request->post('status'), 7);
        }

        if (substr($request->post('status'), 0, 11) == 'save-update') {
            $iToUpdate = substr($request->post('status'), 12);

            Review::where('id' , $iToUpdate)->update([
                'title' => $request->post('title'),
                'name' => $request->post('name'),
                'rating' => $request->post('rating'),
                'review' => $request->post('review'),
            ]);

            return redirect('/admin/reviews');
        }

        if (substr($request->post('status'), 0, 4) == 'drop') {
            $iToDrop = substr($request->post('status'), 5);

            Review::destroy($iToDrop);

            return redirect('/admin/reviews');
        }

        return view('admin.reviews', [
            'aReviews' => $aReviews,
            'sStatus' => $sStatus,
            'iToUpdate' => $iToUpdate,
        ]);
    }

    public function updateReview(Request $request) {

    }
}
