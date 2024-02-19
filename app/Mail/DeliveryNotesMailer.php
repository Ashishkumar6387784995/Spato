<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DeliveryNotesMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Public variable to be accessed in the view.
     *
     * @var string
     */
    public $Auftrags_Nr;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Auftrags_Nr)
    {
        $this->Auftrags_Nr = $Auftrags_Nr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Access the Auftrags_Nr using $this->Auftrags_Nr
        return $this->subject('Spato Delivery Notes')
            ->view('mail.deliveryNotesMailer');
    }
    

    

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Delivery Notes Mailer',
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
            view: 'mail.deliveryNotesMailer',
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
