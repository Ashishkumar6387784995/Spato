<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newsLetteremailer extends Mailable
{
    use Queueable, SerializesModels;

    public $newsletter;
    // public $email;
    
    // public $subject;
    // public $content;

    /**
     * Create a new message instance.
     *
     * @param string $subject
     * @param string $content
     * @return void
     */
    public function __construct($newsletter)
    {

        $this->newsletter = $newsletter;

    }

    /**
     * Build the message.
     *
     * @return $this
     */

     public function build()
     {
         return $this->subject('Spato NewsLetter')
                     ->view('mail.newsletterMail')
                     ->attach(public_path('assets/frontEnd/web/images/spato-logo.png'), [
                         'as' => 'logo.png',
                         'mime' => 'image/png',
                     ]);
     }
}
