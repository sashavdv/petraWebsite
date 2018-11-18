<?php

namespace App\Http\Controllers;

use App\Event;
use App\Review;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index() {
        $aReviews = Review::get();
        $aEvents = Event::get();

        return view('user.pages.home', [
            'aReviews' => $aReviews,
            'aEvents' => $aEvents,
            'sPageTitle' => 'home',
        ]);
    }
}
