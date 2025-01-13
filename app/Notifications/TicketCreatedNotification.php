<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class TicketCreatedNotification extends Notification
{
    use Queueable;

    protected $ticket;

    public function __construct($ticket)
    {
        $this->ticket = $ticket;
    }

    public function via($notifiable)
    {
        return ['database']; // Use 'database' if you want to log notifications.
    }

    public function toMail($notifiable)
    {
        return (new \Illuminate\Notifications\Messages\MailMessage)
                    ->subject('New Ticket Created')
                    ->greeting('Hello Admin,')
                    ->line('A new ticket has been created.')
                    ->action('View Ticket', url('/tickets/'.$this->ticket->id))
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'ticket_id' => $this->ticket->id,
            'title' => $this->ticket->title,
            'created_at' => $this->ticket->created_at,
        ];
    }
}
