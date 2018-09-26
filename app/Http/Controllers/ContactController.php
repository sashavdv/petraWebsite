<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Participants;
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
        $aData = [
            'name_first' => $request->post('name-first'),
            'name_last' => $request->post('name-last'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
        ];

        if ($request->post('subscribe')) {
            Participants::insert($aData);
        }

        $aData['subject'] = $request->post('subject');
        $aData['description'] = $request->post('description');

        $sMailString = $this->mailTemplate($aData);
    }

    private function mailTemplate($aData) {
        return '';
    }
}
