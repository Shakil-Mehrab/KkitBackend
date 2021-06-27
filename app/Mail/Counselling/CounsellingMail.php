<?php

namespace App\Mail\Counselling;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CounsellingMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $counsellig;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($counsellig)
    {
        $this->counsellig= $counsellig;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('message.counselling')->with([
            "counsellig"=>$this->counsellig
        ])->subject("Someone has sent a message for career coinselling");
    }
}
