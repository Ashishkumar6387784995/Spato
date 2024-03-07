<?php

namespace App\Jobs;

use App\Mail\newsLetteremailer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;



class SendNewsletterEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emails;
    protected $newslatterProducts;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emails, $newslatterProducts)
    {
        $this->emails = $emails;
        $this->newslatterProducts = $newslatterProducts;
        // dd($emails);
    }

    /**
     * Execute the job.
     *
     * @return void
     */



     

     public function handle()
     {
        
             foreach ($this->emails as $email) {
                
                     Mail::to($email)->send(new newsLetteremailer($this->newslatterProducts));
              
                   
             }
         
     }
     
    
}
