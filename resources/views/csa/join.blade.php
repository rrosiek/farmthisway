@extends('layouts.main')

@section('body')

<div class="container">
    <h1>Our CSA</h1>
    <hr>
    <p>
        Ths Farmthisway CSA program begins Saturday July 17th, 2021 and runs through Saturday 18th, 2021 with a bonus week (for early subscribers) on September 25th, 2021.
    </p>
    <p>
        Total cost is <strong>$300 for 10 weeks</strong>.  Earn a bonus week by subscribing before December 1st, 2020.
    </p>
    <p>
        This will be our 10th year of offering produce directly from our farm to our members.  Our programs have changed a lot over the years so we have decided to rebuild our website to offer a history of our programs.  Please be patient as we rebuild our website.
    </p>
    <p>
        Purchase a <strong>$99.00</strong> Purchase $99.00 membership which entitles you to purchase a 10 week program for 2020.  In the event we reach our 2021 capacity, your membership fee will automatically apply towards your spot on the 2022 hold list.
    </p>
    <p>
        <h3>10 Week Program <span class="label label-success">{{ $products['10']['priceFormatted'] }}</span></h3>
        <ul>
            <li>Runs from July 17th through September 18th</li>
            <li>1/4 size distribution</li>
            <li>Pickups are Saturdays at the farm in Brant between 8am and 1pm</li>
        </ul>
    </p>

    <hr>

    <form method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-4">
                <h3>One-Time Membership Fee</h3>
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label for="yesMembership">
                        <input name="membership" id="yesMembership" type="radio" value="1" checked>
                        <strong>Yes</strong>, this is my first Farmthisway CSA purchase, please add the <strong>$99.00</strong> one-time membership fee.
                    </label>
                </div>
                <div class="radio">
                    <label for="noMembership">
                        <input name="membership" id="noMembership" type="radio" value="0">
                        <strong>No</strong>, I am already a Farmthisway member.
                    </label>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <h3>Membership Option</h3>
            </div>
            <div class="col-md-8">
                @foreach ($products as $id => $p)
                <div class="radio">
                    <label for="{{ $id }}">
                        @if ($id == 10)
                            <input name="product" id="{{ $id }}" type="radio" value="{{ $id }}" checked>
                        @else
                            <input name="product" id="{{ $id }}" type="radio" value="{{ $id }}">
                        @endif
                        <strong>{{ $p['priceFormatted'] }}</strong> {{ $p['label'] }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <button class="btn btn-primary btn-lg btn-block" data-submit="" type="submit">Step 2: Payment</button>
            </div>
        </div>

    </form>
</div>

@stop
