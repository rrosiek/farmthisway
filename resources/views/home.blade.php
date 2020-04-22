@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">
            <h2>10 Week CSA</h2>
            <h3><span class="label label-success">{{ $products['10']['priceFormatted'] }}</span></h3>
            <h3>July 25th, 2020 through September 26th, 2020</h3>
            <h3>Pickup Saturdays @ Hamburg Market or at the <a href="/contact">farm in Brant</a>.</h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4 col-md-offset-4">
            <a class="btn btn-primary btn-lg btn-block" href="{!! route('csa.join') !!}">PURCHASE</a>
        </div>
    </div>
    <hr>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">Farmthisway Virtual Farm Market</h2>
            <p style="font-size: 16px">Our farm market has gone non-contact, pay and curbside pick-up for all of our products. Items for sale at this time are</p>
            <ul style="font-size: 16px">
                <li>Farmthisway shares (see above)</li>
                <li>Herbs – 3½" pots: Basil, Cilantro, Catnip, Dill, Lavender, Oregano, Parsley, Sage, Spearmint, Thyme</li>
                <li>Patio Tomato: Mid-size tomatoes with 1 st clusters of tomatoes set</li>
                <li>Lettuce basket – 10": Salad or Transplant or both</li>
                <li>Lettuce - 4½" pots</li>
                <li>Proven Winner Combo Baskets</li>
                <li>Geraniums: 4 ½" pot, Mother Plants (stock)
                <li>Citronella Plants: 4½" pots</li>
                <li>Annuals: 4 Pack or flat</li>
                <li>And more</li>
            </ul>
            <p style="font-size: 16px">Items may change as season progresses so please call Carolyn at (716) 818-6882 for pricing and availability. All orders will be filled and ready for pick up within 24 hours.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <img style="margin-right: 10px" width="260" src="/images/fresh_kale.jpg" alt="fresh kale"/>
            <img width="260" src="/images/citronella.jpg" alt="citronella"/>
        </div>
        <div class="col-md-8 col-md-offset-2 text-center" style="padding-top: 20px">
            <img style="margin-right: 10px" width="260" src="/images/flower_baskets.jpg" alt="flower baskets"/>
            <img  width="260" src="/images/basil.jpg" alt="basil"/>
        </div>
        <div class="col-md-8 col-md-offset-2 text-center" style="padding-top: 20px">
            <img style="margin-right: 10px" width="260" src="/images/geraniums.jpg" alt="geraniums"/>
            <img  width="260" src="/images/lettuce_basket.jpg" alt="lettuce baskets"/>
        </div>
        <div class="col-md-8 col-md-offset-2 text-center" style="padding-top: 20px">
            <img style="margin-right: 10px" width="260" src="/images/lettuce.jpg" alt="lettuce"/>
            <img  width="260" src="/images/marigolds.jpg" alt="marigolds"/>
        </div>
        <div class="col-md-8 col-md-offset-2 text-center" style="padding-top: 20px">
            <img style="margin-right: 10px" width="260" src="/images/tomatoes.jpg" alt="tomatoes"/>
        </div>
    </div>
</div>

<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Western New York Service Area</h3>
            </div>
            <div class="modal-body">
                <img src="/images/csa_service_area.png">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@stop
