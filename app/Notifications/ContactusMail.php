<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactusMail extends Notification
{
    use Queueable;

    public $data = array();
    public $email = 'dodgyoneuk@gmail.com';
    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data['data'];
        $this->email = env('MAIL_USERNAME');
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
        $data = $this->data;
        return (new MailMessage)
                    ->subject('Contact us request on '.env('APP_NAME'))
                    ->greeting('Dear Admin')
                    ->line('We have a new request to connect with')
                    ->line('Name: '.$data['name'])
                    ->line('Email: '.$data['email'])
                    ->line('Phone: '.$data['phone'])
                    ->line('Message: '.$data['message'])
                    ->line('Have a nice day ahead!')
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
