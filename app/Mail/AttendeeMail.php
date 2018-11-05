<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Lincolnhack\Model\Attendee;

class AttendeeMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Attendee
     */
    private $attendee;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('view.name');
    }
}
