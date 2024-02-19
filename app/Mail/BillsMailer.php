<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BillsMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Public variable to be accessed in the view.
     *
     * @var string
     */
    public $Rechnungs_Nr;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Rechnungs_Nr)
    {
        $this->Rechnungs_Nr = $Rechnungs_Nr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Access the Rechnungs_Nr using $this->Rechnungs_Nr
        return $this->subject('Spato Bills')
            ->view('mail.billsMailer');
    }
    

    

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Bills Mailer',
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
            view: 'mail.billsMailer',
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
