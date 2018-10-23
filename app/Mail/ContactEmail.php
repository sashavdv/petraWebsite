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
        $sPreSubject = 'Contactmail website: ';
        $bSubscription = false;
        if ($this->aMailData['event']) {
            $sPreSubject = 'Inschrijving: ';
            $bSubscription = true;
        }

        return $this->from(['address' => config('mail.username'), 'name' => config('app.name')])
                    ->replyTo(['address' => $this->aMailData['email']])
                    ->subject($sPreSubject . $this->aMailData['subject'])
                    ->view('emails.contact.message')
                    ->with([
                        'subject' => $this->aMailData['subject'],
                        'description' => $this->aMailData['description'],
                        'email' => $this->aMailData['email'],
                        'phone' => $this->aMailData['phone'],
                        'firstName' => $this->aMailData['name_first'],
                        'lastName' => $this->aMailData['name_last'],
                        'lang' => $this->aMailData['lang'],
                        'subscription' => $bSubscription,
                    ]);
    }
}
