<?php

namespace App\Http\Controllers;

use App\Agenda;
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
        try {
            Agenda::insert([
                'date' => $request->post('date'),
                'title' => $request->post('title'),
                'description_nl' => $request->post('description_nl'),
                'description_en' => $request->post('description_en'),
                'price' => $request->post('price'),
            ]);
            return redirect()->back()->with('message',  'Het evenemt is toegevoegd aan de agenda!');
        } catch (\Exception $exception) {
            return redirect()->back()->withInput()->with('message', 'De gegevens kunnen niet worden opgeslagen!');
        }
    }
}
