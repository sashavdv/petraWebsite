<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    private $aEvents;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($aEvents)
    {
        $this->aEvents = $aEvents;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.update.update_mail')->with(['aEvents' => $this->aEvents]);
    }
}
