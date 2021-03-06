<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class test extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;
    public $alert;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$alert)
    {
       
        $this->user=$user;
        $this->alert=$alert;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('SOSBloodBF@sos.bf')
        ->view('emails.mail')->with(['user'=>$this->user,'alert'=>$this->alert]);
    }
}
