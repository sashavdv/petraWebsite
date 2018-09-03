<?php

namespace App\Http\Controllers;

use App\Http\Resources\agenda_events;
use App\Review;
use Illuminate\Http\Request;
use App\Agenda;



class WelcomeController extends Controller
{
    public function index() {
        $aReviews = Review::get();
        return view('user.pages.home', [
            'aReviews' => $aReviews,
            ]);
    }
}
