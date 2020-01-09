@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">
            <h2>10 Week CSA</h2>
            <h3><span class="label label-success">{{ $products['10']['priceFormatted'] }}</span></h3>
            <h3>July 25th, 2020 through September 26th, 2020</h3>
            <h3>Pickup Saturdays @ Hamburg Market or at the <a href="/contact">farm in Brant</a>.</h3>
            <br>
            <h4><strong>Bonus Week!</strong> Sign up before January 31st, 2020 and receieve the week of October 3rd 2020 for free!</h4>
            <br>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4 col-md-offset-4">
            <a class="btn btn-primary btn-lg btn-block" href="{!! route('csa.join') !!}">PURCHASE</a>
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
