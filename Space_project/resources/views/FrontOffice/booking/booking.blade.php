@extends('templates/template')
<!-- Style -->
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="{{ asset('css/booking.css') }}" rel="stylesheet">
@endsection
@section('title', 'Pakages')


@section('content')

@if(count($allFligth) > 0)
<div class="titleh2">
    <h1> Pakages</h1>
</div>
<div class="bigcard">
    @foreach($allFligth as $fligth)
    <div class="card mycard" style="width: 18rem;">
        <div class="imag">
            <img src="uploads/{{$fligth->file}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body bodyCard">
            <h3 class="card-title">Pakage to {{$fligth->itinerary}}</h3>
            <h5 class="card-subtitle mb-2 text-muted">Fly Ref: {{$fligth->fly_ref}}</h5>
            <p class="card-text"><span>Depart :</span> {{$fligth->depart_date}} at {{$fligth->depart_time}}</p>
            <a href="{{ url('/bookingDitail', $fligth->id) }}">Details</a>
        </div>
    </div>
    @endforeach
</div>

@endif
@endsection