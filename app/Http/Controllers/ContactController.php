<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('user.pages.contact', [
            'sPageTitle' => 'contact',
        ]);
    }

    public function Subscribe(Request $request){
        $oEvent = Agenda::where('id', $request->post('event-button'))->first();
        return view('user.pages.contact', [
            'sPageTitle' => 'contact',
            'oEvent' => $oEvent,
        ]);
    }

    public function sendMail(Request $request) {

    }
    public function fillEventTitle(Request $request, $sTitle){
        return view('user.pages.contact',['title' => $sTitle]);
    }
}
