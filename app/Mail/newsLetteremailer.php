<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newsLetteremailer extends Mailable
{
    use Queueable, SerializesModels;

    public $newslatterProducts;
   
    /**
     * Create a new message instance.
     *
     * @param mixed $newslatterProducts
     * @return void
     */
    public function __construct($newslatterProducts)
    {
        $this->newslatterProducts = $newslatterProducts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pratapidevelopers111@gmail.com', 'Me')
            ->view('mail.newsletterMail')
            ->attach(public_path('assets/frontEnd/web/images/spato-logo.png'), [
                'as' => 'logo.png',
                'mime' => 'image/png',
            ])
            ->attach(storage_path('app/public/' . $this->newslatterProducts[0]->PDF_Datei));
    }
    
    
    
}
