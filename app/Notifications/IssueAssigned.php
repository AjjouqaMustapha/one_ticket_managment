<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;

class IssueAssigned extends Notification
{
    use Queueable;

    public $issue;

    public function __construct($issue)
    {
        $this->issue = $issue;
    }

    

    public function via($notifiable)
    {
        return ['database']; // Tqyder tdir ['mail', 'database'] ila bghiti email
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => "Admin assigned you a new issue: #{$this->issue}.",
            'issue_id' => $this->issue,
            'assigned_by' => auth()->user()->name // Admin smiya
        ];
    }
}
