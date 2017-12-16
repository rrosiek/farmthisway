<html>
    <body>
        <p>Subject: {{ $context['subject'] }}</p>
        <p>From: {{ $context['email'] }}</p>
        <p>Message:</p>
        <p>{!! $context['body'] !!}</p>
    </body>
</html>
