<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Comment;

class add_comment extends Notification
{
    use Queueable;
    
    private $comment;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable){
        return [
            //'data' => $this->details['body'],
            'id' => $this->comment->id,
            'title'=>'تم اضافة تعليق جديد على منتجك بواسطة ::',
            'name' => auth()->user()->name,
            
        ];
    }
}
