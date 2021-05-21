@extends('templates/template')
<!-- Style -->
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="{{ asset('css/booking.css') }}" rel="stylesheet">

@endsection
@section('title', 'Booking')


@section('content')
<h2>All pakage for the user </h2>

@if(count($allFligth) > 0)

<<<<<<< HEAD
    <<<<<<< Updated upstream @foreach($allFligth as $fligth) <div class="bigcard">
        <div class="card mycard" style="width: 18rem;">
            <div class="imag">
                <img src="uploads/{{$fligth->file}}" class="card-img-top" alt="...">

            </div>
            <div class="card-body bodyCard">
                <h5 class="card-title">Pakage to {{$fligth->itinerary}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Fly Ref: {{$fligth->fly_ref}}</h6>
                =======
                <div class="card mycard" style="width: 18rem;">
                    <div class="imag">
                        <img src="uploads/{{$fligth->file}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body bodyCard">
                        <h3 class="card-title">Pakage to {{$fligth->itinerary}}</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Fly Ref: {{$fligth->fly_ref}}</h5>
                        >>>>>>> Stashed changes
                        <p class="card-text"><span>Depart :</span> {{$fligth->depart_date}} at {{$fligth->depart_time}}</p>
                        <a href="{{ url('/bookingDitail', $fligth->id) }}">Details</a>
                    </div>
                </div>




                @endforeach
                @endif

            </div>
            @endsection
=======
@foreach($allFligth as $fligth)
<div class="bigcard">
    <div class="card mycard" style="width: 18rem;">
        <div class="imag">
            <img src="uploads/{{$fligth->file}}" class="card-img-top" alt="...">

        </div>
        <div class="card-body bodyCard">
            <h5 class="card-title">Pakage to {{$fligth->itinerary}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Fly Ref: {{$fligth->fly_ref}}</h6>
            <p class="card-text"><span>Depart :</span> {{$fligth->depart_date}} at {{$fligth->depart_time}}</p>
            <a href="{{ url('/bookingDitail', $fligth->id) }}">Details</a>
        </div>
    </div>

</div>


@endforeach
@endif
@endsection
>>>>>>> parent of d8d68bc (test)
