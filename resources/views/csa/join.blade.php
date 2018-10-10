@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1>Our CSA</h1>
            <hr>
            <p>
                Purchase a <strong>$99.00</strong> Purchase $99.00 membership which entitles you to purchase a 10 week program for 2019.  In the event we reach our 2019 capacity, your membership fee will automatically apply towards your spot on the 2020 hold list.
            </p>
            <p>
                We have restructured our Farmthisway program to a single 10 week share available for pickup at the Hamburg Farmer's market.
            </p>
            <p>
                <h3>10 Week Program <span class="label label-success">{{ $products['10']['priceFormatted'] }}</span></h3>
                <ul>
                    <li>Runs from July 27th through September 28th</li>
                    <li>1/4 size distribution</li>
                    <li>Pickup Saturdays every week at the farm or Hamburg Farmers Market</li>
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

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    <button class="btn btn-primary btn-lg btn-block" data-submit="" type="submit">Step 2: Payment</button>
                </div>
                </div>

            </form>
        </div>
        <div class="col-md-3">
            @include('partials.sidebar')
        </div>
    </div>
</div>


@stop
