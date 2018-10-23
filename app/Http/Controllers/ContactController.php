<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Event;
use App\Mail\ContactEmail;
use App\Participants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $aMailData = [
            'subject' => $request->post('subject'),
            'name_first' => $request->post('name-first'),
            'name_last' => $request->post('name-last'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'description' => $request->post('description'),
            'lang' => '',
        ];
        $aData = [
            'name_first' => $request->post('name-first'),
            'name_last' => $request->post('name-last'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'lang' => '',
        ];

        if ($request->post('subscribe')) {
            if (is_object($oParticipant = (Participants::where('email', $aData['email'])->first()))) {
                Participants::where('id', $oParticipant->id)->update($aData);
            }
            else {
                Participants::insert($aData);
            }
        }

//        try {
            Mail::to(config('mail.username'))->send(new ContactEmail($aMailData));
//        }
//        catch (\Exception  $exception) {
//            return 'fout';
//        }
//        return redirect()->back()->with('succes', 'De email is succesvol verzonden!');
    }
}
