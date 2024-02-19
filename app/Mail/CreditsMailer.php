<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CreditsMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Public variable to be accessed in the view.
     *
     * @var string
     */
    public $Gutschrifts_Nr;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Gutschrifts_Nr)
    {
        $this->Gutschrifts_Nr = $Gutschrifts_Nr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Access the Gutschrifts_Nr using $this->Gutschrifts_Nr
        return $this->subject('Spato Credits')
            ->view('mail.creditsMailer');
    }
    

    

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Credits Mailer',
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
            view: 'mail.creditsMailer',
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
