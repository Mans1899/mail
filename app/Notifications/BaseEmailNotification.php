<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class BaseEmailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        $this->onQueue('crm');
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    protected function prettifyLine(string $line): string
    {
        return sprintf('<p style="font-size: small; text-align: justify; color: #23241f; margin-bottom: 0;">%s</p><br/>', $line);
    }

    protected function prettifyLink(string $link, ?string $href = null): string
    {
        if ($href === null) {
            return sprintf('<a href="%1$s">%1$s</a>', $link);
        }

        return sprintf('<a href="%s">%s</a>', $href, $link);
    }
}
