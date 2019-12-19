@extends('layouts.main')

@section('body')

<div class="container">
    <h1>Contact Us</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-4">
            <p>
                <h4>Farmthisway</h4>
                11086 Brant Reservation Rd.<br>
                Brant, NY 14027<br>
            </p>
            <p>
                <strong>Phone:</strong> (716) 549-1038
            </p>
        </div>
        <div class="col-md-8">
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps-api-ssl.google.com/maps?f=d&amp;source=s_d&amp;saddr=11086+Brant+Reservation+Rd%2FCo+Rd+9&amp;daddr=&amp;hl=en&amp;geocode=Fay8iQIdxkpK-w&amp;sll=42.581273,-79.016247&amp;sspn=0.104278,0.222988&amp;vpsrc=0&amp;mra=mr&amp;ie=UTF8&amp;t=m&amp;ll=42.581273,-79.016247&amp;spn=0.104278,0.222988&amp;output=embed"></iframe><br /><small><a href="https://maps-api-ssl.google.com/maps?f=d&amp;source=embed&amp;saddr=Brant+Reservation+Rd%2FCo+Rd+9&amp;daddr=&amp;hl=en&amp;geocode=Fay8iQIdxkpK-w&amp;sll=42.581273,-79.016247&amp;sspn=0.104278,0.222988&amp;vpsrc=0&amp;mra=mr&amp;ie=UTF8&amp;t=m&amp;ll=42.581273,-79.016247&amp;spn=0.104278,0.222988" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
        <hr>
    </div>
    <h4>Send Us An E-Mail</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            Please correct the following error(s):
            <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="subject">Subject</label>
            <input class="form-control" id="subject" name="subject" type="text" value="{{ old('subject') }}">
        </div>
        <div class="form-group">
            <label for="email">Your E-Mail Address</label>
            <input class="form-control" id="email" name="email" type="text" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="body">Message</label>
            <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
        </div>
        <br>
        <button class="btn btn-primary" data-submit="" id="btnContact" type="submit">Send Email</button>
        <input class="hidden" name="name" type="text">
    </form>
</div>

@stop
