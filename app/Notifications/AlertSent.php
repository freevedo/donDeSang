<?php

namespace App\Notifications;

use App\Mail\test;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;

class AlertSent extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;
    public $alert;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$alert)
    {
        $this->user=$user;
        $this->alert=$alert;
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

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return Mail::to($this->user->email)->send(new test($this->user,$this->alert));;
    }


     /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return 
     */
    public function toDatabase($notifiable)
    {
        return [
            'date_alert'=>Carbon::now(),
            'groupe_sanguin'=>$this->alert->groupe_sanguin,
            'tel'=>$this->alert->tel
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
