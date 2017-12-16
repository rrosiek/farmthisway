<html>
    <body>
        Dear {{ $order->name }},<br><br>
        Welcome to Farmthisway!  Thank you for joining us this year.  We look forward to providing you with your weekly share of fresh and healthy produce.  Your participation in Farmthisway will give you a unique opportunity to know where your food comes from and form a trusting relationship with the farmers who grow it.  We encourage you to check the website regularly and watch our YouTube videos to see the progress of the crops and the work of the farm.  You can also follow us on Twitter, Facebook, and Pinterest.<br><br>
        Please keep this email for your records.  If you have any questions you can contact us here: https://www.farmthisway.com/contact<br><br>
        Order Date: {{ date('F, j Y') }}<br><br>
        @if ($order->member_fee_paid)
            Membership Fee Included: YES<br>
        @else
            Membership Fee Included: NO<br>
        @endif
        CSA: {{ $order->product }}
        <br><br>
        Total: ${{ number_format($order->amount / 100, 2, '.', ',')}}<br><br>
        Thank you,<br>
        Farmthisway Team
    </body>
</html>
