<?php

namespace App\Http\Controllers;

use App\Participants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        $aParticipants = Participants::paginate(10);

        return view('admin.home',  [
            'aParticipants' => $aParticipants,
        ]);
    }

    public function removeParticipant(Request $request) {
        Participants::destroy($request->post('participantId'));

        return response()->json([
            'success' => true,
        ]);
    }
}
