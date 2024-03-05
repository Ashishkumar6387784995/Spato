<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class enquiryMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
     public $email;
     public $phone;
     public $textarea;
    public function __construct($name, $email, $phone, $textarea)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->textarea = $textarea;
    }


    public function build()
    {
        return $this->subject('Reset Your Password')
                    ->view('mail.enquiryMail')
                    ->attach(public_path('assets/frontEnd/web/images/spato-logo.png'), [
                        'as' => 'logo.png',
                        'mime' => 'image/png',
                    ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'New Customer Enquiry in Spato',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.enquiryMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
