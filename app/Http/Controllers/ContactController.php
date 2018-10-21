<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Event;
use App\Participants;
use Illuminate\Http\Request;
use Monolog\Handler\mail;

class ContactController extends Controller
{
    public function index(Request $request) {
        $oEvent = Event::where('id', $request->get('event_id'))->first();
        return view('user.pages.contact', [
            'sPageTitle' => 'contact',
            'oEvent' => $oEvent,
        ]);
    }

    public function Subscribe(Request $request){
        $oEvent = Event::where('id', $request->post('event_id'))->first();
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
            if (is_object($oParticipant = (Participants::where('email', $aData['email'])->first()))) {
                Participants::where('id', $oParticipant->id)->update($aData);
            }
            else {
                Participants::insert($aData);
            }
        }

        if (mail('info@purepetra.be', $request->post('subject'), $request->post('description')) != false) {
            return redirect('home');
        }
        else return redirect()->back()->withInput();
    }
}
