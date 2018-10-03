<?php

namespace App\Http\Controllers;

use App\Participants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        if (!Auth::check()){
            return redirect(route('login'));
        }

        $aParticipants = Participants::get();

        return view('admin.home',  [
            'aParticipants' => $aParticipants,
        ]);
    }
}
