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
        if (!Auth::check()) {
            return redirect('login');
        }

       return view('admin/events');
    }
    public function addEvent(Request $request)
    {
//        try {
            Event::insert([
                'date' => $request->post('date'),
                'event_time' => $request->post('time'),
                'title' => $request->post('title'),
                'type' => $request->post('type'),
                'description_nl' => $request->post('description_nl'),
                'description_en' => $request->post('description_en'),
                'price' => $request->post('price'),
            ]);
            return redirect()->back()->with('message',  'Het evenemt is toegevoegd aan de agenda!');
//        } catch (\Exception $exception) {
//            return redirect()->back()->withInput()->with('message', 'De gegevens kunnen niet worden opgeslagen!');
//        }
    }
}
