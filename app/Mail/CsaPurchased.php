<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CsaPurchased extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Order
     */
    public $order;

    /**
     * @param  \App\Order $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;

        $this->subject('New Farmthisway CSA Purchase');
    }

    /**
     * @return $this
     */
    public function build()
    {
        return $this->view('email.invoice.owner');
    }
}
