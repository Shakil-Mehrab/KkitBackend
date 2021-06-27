<?php

namespace App\Mail\Getintouch;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetintouchMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $getintouch;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($getintouch)
    {
        $this->getintouch= $getintouch;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('message.getintouch')->with([
            "getintouch"=>$this->getintouch
        ])->subject("Someone has sent a message for Get in Touch");
    }
}
