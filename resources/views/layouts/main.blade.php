<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="stripe-key" content="{{ env('STRIPE_KEY') }}">

        <title>Farmthisway :: {{ $title or 'Welcome' }}</title>

        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body>

        <div id="app">

            @include('partials.header')

            @yield('body')

            @include('partials.footer')

        </div>

    </body>

    <script defer src="https://js.stripe.com/v3/"></script>
    <script defer src="/js/app.js"></script>
</html>
