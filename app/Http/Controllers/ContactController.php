<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Participants;
use Illuminate\Http\Request;
use Monolog\Handler\mail;

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

        if (mail('info@purepetra.be', $request->post('subject'), $request->post('description')) != false) {
            return redirect('home');
        }
        else return redirect()->back()->withInput();
    }
}
