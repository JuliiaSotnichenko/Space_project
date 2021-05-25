@extends('templates/template')

<!-- Style -->
@section('style')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="{{ asset('css/payment.css') }}" rel="stylesheet">
@endsection
@section('title', 'Payment')

@section('content')
<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="container">
    <div id="Checkout" class="inline">
        <h1>Pay Invoice</h1>
        <div class="card-row">
            <span class="visa"></span>
            <span class="mastercard"></span>
            <span class="amex"></span>
            <span class="discover"></span>
        </div>


        <form action="" method="POST">
            @csrf
            <!-- @method('PUT') -->
            <div class="form-group">
                <h3 class="PaymentAmount">Payment</h3>
                <!-- <div class="amount-placeholder">
                  <span>$</span>
                  <span>500.00</span>
              </div> -->
            </div>
            <div class="form-group">
                <label for="NameOnCard">Name on card</label>
                <input name="NameOnCard" id="NameOnCard" class="form-control pyfor" type="text" maxlength="255"></input>
            </div>
            <div class="form-group">
                <label for="CreditCardNumber">Card number</label>
                <input name="CreditCardNumber" id="CreditCardNumber" class="null card-image form-control pyfor" type="text"></input>
            </div>
            <div class="expiry-date-group form-group">
                <label for="ExpiryDate">Expiry date</label>
                <input name="ExpiryDate" id="ExpiryDate" class="form-control " type="text" placeholder="MM / YY" maxlength="7"></input>
            </div>
            <div class="security-code-group form-group">
                <label for="SecurityCode">Security code</label>
                <div class="input-container">
                    <input name="SecurityCode" id="SecurityCode" class="form-control pycod " type="text"></input>
                    <i id="cvc" class="fa fa-question-circle"></i>
                </div>
                <div class="cvc-preview-container two-card hide">
                    <div class="amex-cvc-preview"></div>
                    <div class="visa-mc-dis-cvc-preview"></div>
                </div>
            </div>
            <div class="zip-code-group form-group">
            </div>
            <div class="data">
                <input type="text" name="pakage" value="{{$packag->id}}" hidden>
                <input type="text" name="user" value="{{ Auth::user()->id }}" hidden>
                <input type="text" name="payment" value="done" hidden>
            </div>
            <button id="PayButton" class="btn btn-block btn-success  " type="submit">
                <span class="submit-button-lock"></span>
                <span class="align-middle">Pay</span>
            </button>


        </form>
    </div>
</div>


@endsection

<!-- Script -->
@section('script')
<script src="js/payment.js"></script>
@endsection