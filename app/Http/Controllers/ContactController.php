<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Event;
use App\Mail\ContactEmail;
use App\Mail\UpdateMail;
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

    public function sendMail(Request $request) {
        $aMailData = [
            'subject' => $request->post('subject'),
            'name_first' => $request->post('name-first'),
            'name_last' => $request->post('name-last'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'description' => $request->post('description'),
            'lang' => $request->post('lang'),
            'event' => false,
        ];
        $aData = [
            'name_first' => $request->post('name-first'),
            'name_last' => $request->post('name-last'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'lang' => $request->post('lang'),
        ];

        if ($request->post('event')) {
            $aMailData['event'] = true;
        }

        if ($request->post('subscribe')) {
            if (is_object($oParticipant = (Participants::where('email', $aData['email'])->first()))) {
                Participants::where('id', $oParticipant->id)->update($aData);
            }
            else {
                Participants::insert($aData);
            }
        }

        try {
            Mail::to(config('mail.username'))->send(new ContactEmail($aMailData));
        }
        catch (\Exception  $exception) {
            return redirect('contact')->with('failure', 'De email is niet verzonden. Probeer het later opnieuw!');
        }
        return redirect('contact')->with('success', 'De email is succesvol verzonden!');
    }

    public function sendUpdateMail() {
        $aEmailReceivers = Participants::pluck('email');

        $aEvents = Event::getMonthlyEvents();

        foreach ($aEmailReceivers as $sEmail) {
            Mail::to($sEmail)->send(new UpdateMail($aEvents));
        }

        return $aEmailReceivers;
    }
}
