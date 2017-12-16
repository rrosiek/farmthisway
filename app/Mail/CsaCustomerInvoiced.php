<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CsaCustomerInvoiced extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Models\Order
     */
    public $order;

    /**
     * @param  \App\Order $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;

        $this->subject('Farmthisway CSA Purchase');
        $this->replyTo(env('MAIL_WEBADMIN'));
    }

    /**
     * @return $this
     */
    public function build()
    {
        return $this->view('email.invoice.customer');
    }
}
