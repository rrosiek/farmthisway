<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        if ($request->name)
            return redirect('/');
        
        $data = $request->validate([
            'subject' => ['required'],
            'email' => ['required', 'email', 'max:255'],
            'body' => ['required'],
        ]);

        Mail::to(env('MAIL_WEBADMIN'))->send(new ContactUs($data));

        return redirect()->back()->with('success', 'Your message has been sent, we\'ll get back to you shortly!');
    }
}
