@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1>Thank You {{ $order['name'] }}!</h1>
            <hr>
            <p>
                We have also emailed this information to you for your records.  If you have any questions on your Farmthisway CSA purchase, please <a href="{!! route('contact') !!}">contact us</a>!
            </p>
            <div class="well">
                <p>
                    <strong>${{ number_format($order['amount'] / 100, 2, '.', ',') }}</strong> has been charged to your <strong>{{ $order['cc_brand'] }}</strong> ending in <strong>{{ $order['cc_lastfour'] }}</strong>
                </p>
                <p>
                    You ordered a {{ $order['product'] }} that {{ $order['member_fee_paid'] ? 'included' : 'did not include' }} a membership fee.
                </p>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@stop