<html>
    <body>
        A new order has been placed at Farmthisway.  Below are the order details.<br><br>
        Name: {{ $order->name }}<br>
        Order Date: {{ date('F, j Y') }}<br><br>
        @if ($order->member_fee_paid)
            Membership Fee Included: YES<br>
        @else
            Membership Fee Included: NO<br>
        @endif
        CSA: {{ $order->product }}
        <br><br>
        Total: ${{ number_format($order->amount / 100, 2, '.', ',')}}<br><br>
        Email: {{ $order->email }}<br>
        Mailing Address: {{ $order->mailing_address }}<br>
        Phone Number: {{ $order->phone }}<br><br>
        Farmthisway Website
    </body>
</html>
