<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request) {
        if ($request->post('event-button' != null)) {
            $oEvent = Agenda::find($request->post('event-button'));
            return view('user.pages.contact', [
                'sPageTitle' => 'contact',
                'oEvent' => $oEvent,
            ]);
        }
        else {
            return view('user.pages.contact', [
                'sPageTitle' => 'contact',
            ]);
        }
    }
    public function Subscribe(Request $request){
        
    }

    public function sendMail(Request $request) {

    }
    public function fillEventTitle(Request $request, $sTitle){
        return view('user.pages.contact',['title' => $sTitle]);
    }
}
