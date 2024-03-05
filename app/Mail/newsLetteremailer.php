<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    
    public $subject;
    public $content;

    /**
     * Create a new message instance.
     *
     * @param string $subject
     * @param string $content
     * @return void
     */
    public function __construct($name, $email, $subject, $content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

     public function build()
     {
         return $this->subject('Reset Your Password')
                     ->view('mail.enquiryMail')
                     ->attach(public_path('assets/frontEnd/web/images/spato-logo.png'), [
                         'as' => 'logo.png',
                         'mime' => 'image/png',
                     ]);
     }
}
