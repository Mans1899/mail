<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;

class EmailNotification extends BaseEmailNotification
{
    /**
     * @var string
     */

    public function __construct( )
    {
        parent::__construct();
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(123)
            ->line(123)
        ;
    }
}
