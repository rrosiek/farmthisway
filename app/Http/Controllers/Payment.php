<?php

namespace App\Http\Controllers;

use App\Mail\CsaCustomerInvoiced;
use App\Mail\CsaPurchased;
use App\Order;
use App\Products\ProductFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;

class Payment extends Controller
{
    const membershipCost = 9900;

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if (!session('membership') and !session('product'))
            return redirect()->route('csa.join');

        $product = ProductFactory::make(session('product'));

        if (session('membership')) {
            $total = static::membershipCost + $product->getPrice();
            $membership = static::membershipCost;
        } else {
            $total = $product->getPrice();
            $membership = false;
        }

        $request->session()->reflash();
        session(['billTotal' => $total]);

        $viewData = [
            'title' => 'Join Our CSA',
            'membership' => $membership,
            'product' => $product->toArray(),
            'total' => $total,
        ];

        return view('csa.payment', $viewData);
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeCart(Request $request)
    {
        $membership = $request->membership === '1' ? true : false;

        session(['membership' => $membership]);
        session(['product' => $request->product]);

        return redirect()->route('csa.payment');
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function processPayment(Request $request) {
        $validatedData = $request->validate([
            'brand' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'mailing_address' => ['required', 'max:255'],
            'lastFour' => ['required', 'numeric'],
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'token' => ['required']
        ]);

        $product = ProductFactory::make(session('product'));

        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            'amount' => session('billTotal'),
            'currency' => 'usd',
            'description' => 'Farmthisway CSA ' . $product->getLabel(),
            'source' => $validatedData['token'],
        ]);

        $order = Order::create([
            'product' => $product->getLabel(),
            'amount' => session('billTotal'),
            'member_fee_paid' => session('membership'),
            'email' => $validatedData['email'],
            'mailing_address' => $validatedData['mailing_address'],
            'phone' => $validatedData['phone'],
            'name' => $validatedData['name'],
            'cc_brand' => $validatedData['brand'],
            'cc_lastfour' => $validatedData['lastFour'],
            'token' => $validatedData['token'],
        ]);

        session(['order' => $order]);

        try {
            Mail::to($validatedData['email'])->send(new CsaCustomerInvoiced($order));
            Mail::to(env('MAIL_WEBADMIN'))->send(new CsaPurchased($order));
        } catch(\Exception $e) {
            Log::error('Could not send purchase confirmation emails: ' . $e->getMessage());
        } finally {
            return response()->json([], 200);
        }
    }

     /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function thankyou(Request $request)
    {
        if (!session('order'))
            return redirect()->route('home');

        $request->session()->forget('membership');
        $request->session()->forget('product');
        $request->session()->reflash();

        $order = session('order');

        $viewData = [
            'title' => 'Thank You!',
            'order' => $order->toArray(),
        ];

        return view('csa.thankyou', $viewData);
    }
}
