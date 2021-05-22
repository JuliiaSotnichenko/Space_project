@extends('templates/template')
<!-- Style -->
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="{{ asset('css/booking.css') }}" rel="stylesheet">
@endsection
@section('title', 'Pakages |Detail')
@section('content')
<div class="titleh2">
    <h1> Pakages Detail</h1>
</div>
<div class="detail">

    <div class="carddetail">
        <div class="">
            <img src="/uploads/{{$fligth->file}}" class="card-img-top" alt="...">
        </div>
        <div class="desc">

            <div>
                <span>Reference </span> {{$fligth->fly_ref}}
            </div>

            <div>
                <span>Itinerary </span> {{$fligth->itinerary}}
                <br>
                <span>launch Location - </span> {{$fligth->location}}

            </div>
            <div>
                <span>Depart date </span> {{$fligth->depart_date}}
                <br>
                <span>Arrival date </span> {{$fligth->arrival_date}}
                <br>

            </div>
            <div>
                <span>Departe time </span> {{$fligth->depart_time}}
                <br>
                <span>Arrival time </span> {{$fligth->arrival_time}}
            </div>
            <div>
                <span>Price </span> {{$fligth->price}}€
            </div>
            <div>
                <span>Discription </span> {{$fligth->description}}
            </div>
        </div>

    </div>
    <div class="bu">
        <a href="{{ url('/bookpay', $fligth->id) }}">Bay</a>
        <!-- go to payment page and insert in the data base -->
    </div>
</div>

@endsection