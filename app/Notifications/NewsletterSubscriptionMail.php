<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewsletterSubscriptionMail extends Notification
{
    use Queueable;

    public $email = '';
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
                    ->greeting('Hi There,')
                    ->line('Thank you for subscribing to our dodgyone.com! We appreciate your interest in helping us as well as landlord community.')
                    ->line('We\'ll keep you updated on the latest dodgy tenants, dodgy tricks, trends, and information in this industry.')
                ->line('We hope you enjoy our content and find it valuable. If you have any questions or feedback, please don\'t hesitate to contact us.')
                ->line('Thanks again for subscribing!')
//                ->line('Sincerely,')
//                    ->line('The Dodgyone.com Team')
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
