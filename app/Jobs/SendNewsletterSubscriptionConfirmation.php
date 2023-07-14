<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\NewsletterSubscriptionConfirmation;
use Mail;

class SendNewsletterSubscriptionConfirmation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var NewsletterSubscription
     */
    public $subscription;
    
    
    /**
     * Create a new job instance.
     */
    public function __construct($subscription)
    {
        //
        $this->subscription = $subscription;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        Mail::to($this->subscription->email)->send(
            new NewsletterSubscriptionConfirmation($this->subscription)
        );
    }
}
