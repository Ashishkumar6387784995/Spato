<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendResetLinkEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user; // Data to pass to the email template

    public function __construct($user)
    {
        $this->user = $user;
    }

    // public function build()
    // {
    //     return $this->subject('Subject of the Email')
    //                 ->view('emails.my_custom_mailer')
    //                 ->with(['data' => $this->data]);
    // }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Send Reset Link Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        // return new Content(
        //     markdown: 'frontEnd.login.email.emailVerification',
        //     with: [
        //         'user' => $this->user,
        //     ]
        // );

        return new Content(
            view: 'mail.emailReset',
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
