<?php

namespace App\Http\Controllers;

use App\Http\Resources\agenda_events;
use App\Review;
use Illuminate\Http\Request;
use App\Agenda;
use Illuminate\Support\Facades\Session;


class WelcomeController extends Controller
{
    public function index() {
        $aReviews = Review::get();
        return view('user.pages.home', [
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
            return redirect('home');
        }
        else {
            if (!Session::has('write-review')) {
                Session::flash('write-review');
                return redirect('home#new-review');
            }
        }

    }
}
