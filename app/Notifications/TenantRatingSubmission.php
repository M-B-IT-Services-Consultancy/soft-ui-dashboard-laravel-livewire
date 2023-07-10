<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;

class TenantRatingSubmission extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('DodgyOne.com | Tenant Rating Submitted Successfully')
                    ->greeting('Dear '.Auth::user()->name.'!')
                    ->line('')
                    ->line('Welcome to dodgyone.com! We\'re so happy to have you on board. We know you\'re busy, so we\'ll keep things brief. Here\'s what you can expect from us: ')
                    ->line('We\'ll let you know about upcoming dodgy tenants tricks and information.')
                    ->line('We\'ll answer any questions you have about our services.')
                    ->line('We want to make sure you get the most out of your dodgyone.com experience, so please don\'t hesitate to contact us if you have any questions or feedback.')
                    
                    ->line('Sincerely,')
                    ->line('Team dodgyone.com')
                    ;
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
