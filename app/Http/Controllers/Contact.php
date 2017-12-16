<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailer;
use Farmthisway\Http\Requests\ContactRequest;

class Contact extends Controller
{
    /**
     * Show contact form
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('contact', ['title' => 'Contact Us']);
    }

    /**
     * @param  \Farmthisway\Http\Requests\ContactRequest $request
     * @param  \Illuminate\Contracts\Mail\Mailer $mail
     * @return \Illuminate\Http\Response
     */
    public function send(ContactRequest $request, Mailer $mail)
    {
        if ($request->name !== '')
            return redirect('/');

        $mail->send('email.contact', $request->all(), function ($message) use ($request) {
            $message->to('farmthisway@gmail.com')
                ->subject('From Farmthisway Contact Page: ' . $request->subject)
                ->replyTo($request->email, $name = null);
        });

        return redirect()->back()->with('success', 'Your message has been sent, we\'ll get back to you shortly!');
    }
}
