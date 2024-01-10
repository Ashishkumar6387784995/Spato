<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OfferMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Public variable to be accessed in the view.
     *
     * @var string
     */
    public $offerId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($offerId)
    {
        $this->offerId = $offerId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Access the offerId using $this->offerId
        return $this->subject('Reset Your Password')
            ->view('mail.offerPdfMailer')
            ->attach(storage_path('app/pdf/' . $this->offerId . '.pdf'), [
                'as' => $this->offerId . '.pdf',  // Use $offerId as the file name
                'mime' => 'application/pdf', // Set the correct MIME type for a PDF file
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
            subject: 'Offer Mailer',
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
            view: 'mail.offerPdfMailer',
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
