<?php

namespace App\Http\Controllers;

use App\Participants;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public static function sendUpdate() {
        $aMailList = Participants::get();
    }
}
