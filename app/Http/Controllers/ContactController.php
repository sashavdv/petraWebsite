<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Subscribe(Request $request){
        
    }

    public function sendMail(Request $request) {

    }
    public function fillEventTitle(Request $request, $sTitle){
        return view('user.pages.contact',['title' => $sTitle]);
    }
}
