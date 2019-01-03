<?php

namespace App\Http\Controllers;

use App\MailTemplate;
use App\Participants;
use Illuminate\Http\Request;

class AdminMailController extends Controller
{
    public function showParticipants() {
        $aParticipants = Participants::paginate(10);

        return view('admin.mails.mail_list',  [
            'aParticipants' => $aParticipants,
        ]);
    }

    public function removeParticipant(Request $request) {
        Participants::destroy($request->post('participantId'));

        return response()->json([
            'success' => true,
        ]);
    }

    public function showMailTemplate() {
        $oMailTemplateData = MailTemplate::find(1);

        return view('admin.mails.mail_template',  [
            'oMailTemplateData' => $oMailTemplateData,
        ]);
    }

    public function editMailTemplate() {
        $oMailTemplateData = MailTemplate::find(1);

        return view('admin.mails.mail_template_edit',  [
            'oMailTemplateData' => $oMailTemplateData,
        ]);
    }

    public function updateMailTemplate(Request $request) {
        MailTemplate::where('id', 1)->update([
            'mail_head' => $request->post('mail-head'),
            'mail_foot' => $request->post('mail-foot'),
        ]);

        return redirect()->route('admin_template')->with('success', 'De template is succesvol opgeslagen!');
    }
}
