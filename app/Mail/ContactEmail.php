<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $aMailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($aMailData)
    {
        $this->aMailData = $aMailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => config('mail.username'), 'name' => config('app.name')])
                    ->replyTo(['address' => $this->aMailData->from, 'name' => $this->aMailData->name])
                    ->subject('Contactmail website: ' . $this->aMailData->subject)
                    ->view('emails.contact.message')
                    ->text('emails.contact.message_plain');
    }
}
