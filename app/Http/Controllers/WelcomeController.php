<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $aReviews = Review::get();
        return view('user.pages.home', [
            'aReviews' => $aReviews,
        ]);
    }
}
