@extends('layouts.main')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1>Join Our CSA</h1>
            <hr>
            <h2>Payment Summary</h2>
            <table class="table">
                <thead><th>Description</th><th>Item Price</th></thead>
                <tbody>
                    @if ($membership)
                    <tr>
                        <td>One-time Membership Fee</td>
                        <td>${{ number_format($membership / 100, 2, '.', ',') }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td>{{ $product['label'] }}</td>
                        <td>{{ $product['priceFormatted'] }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <th>Total</th><th>${{ number_format($total / 100, 2, '.', ',') }}</th>
                </tfoot>
            </table>

            <form class="form-horizontal" id="purchaseCsa">

                <h2>Billing Information</h2>
                <p>
                    Enter your payment details below; <strong>all fields are required</strong>.
                </p>

                @if ($errors->any())
                <div class="alert alert-danger">
                    Please correct the following error(s):
                    <ul>
                        @foreach ($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="alert alert-danger hidden" id="paymentErrors" role="alert"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="firstName">First Name</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="firstName" name="firstName" type="text" value="{{ old('firstName') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="lastName">Last Name</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="lastName" name="lastName" type="text" value="{{ old('lastName') }}">
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">E-Mail Address</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="phone">Phone Number</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="phone" name="phone" size="2" type="text" value="{{ old('phone') }}">
                        <small class="help-block">Format: ###-###-####</small>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="creditCard">Payment</label>
                    <div class="col-sm-6">
                        <div style="border-bottom: 1px solid #b5b5b5; margin-top: 6px" id="cardElement"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <button class="btn btn-primary btn-lg btn-block" data-submit="" type="submit">Complete Order</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@stop
