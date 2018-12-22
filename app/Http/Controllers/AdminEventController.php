<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminEventController extends Controller
{
    public function index(){
        $aEvents = Event::orderBy('date', 'desc')->orderBy('event_time', 'desc')->paginate(10);

        return view('admin.events.overview', [
            'aEvents' => $aEvents,
        ]);
    }

    public function removeEvent(Request $request) {
        Event::destroy($request->post('eventId'));

        return response()->json([
            'success' => true,
        ]);
    }

    public function editEventForm($iEventId = null) {
        return self::displayInputForm(Event::find($iEventId));
    }

    public function addEventForm()
    {
        return self::displayInputForm();
    }

    private static function displayInputForm($oEventData = null) {
        if ($oEventData == null) $oEventData = new Event;

        return view('admin.events.input_fields', [
            'oEventData' => $oEventData,
        ]);
    }

    public function saveEvent(Request $request) {
        if ($request->post('id') == null) {
            $oEvent = new Event;
        }
        else {
            $oEvent = Event::find($request->post('id'));
        }

        $oEvent->date = $request->post('date');
        $oEvent->event_time = $request->post('time');
        $oEvent->title = $request->post('title');
        $oEvent->type = $request->post('type');
        $oEvent->price = $request->post('price');
        $oEvent->description_nl = $request->post('description_nl');
        $oEvent->description_en = $request->post('description_en');

        $oEvent->save();

        return redirect()->route('admin_events')->with('success', 'Het evenement is succesvol opgeslagen!');
    }
}
