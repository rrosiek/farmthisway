<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    public $context;

    /**
     * @param  array $context
     * @return void
     */
    public function __construct($context)
    {
        $this->context = $context;

        $this->subject('From Farmthisway Contact Page: ' . $context['subject']);
        $this->replyTo($context['email']);
    }

    /**
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact');
    }
}
