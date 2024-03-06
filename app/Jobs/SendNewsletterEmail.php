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
    protected $newsletter;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emails, $newsletter)
    {
        $this->emails = $emails;
        $this->newsletter = $newsletter;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->emails->pluck('email')->toArray())->send(new newsLetteremailer($this->newsletter));
    }
}
