@extends('templates/template')

<!-- Style -->
@section('style')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

@endsection
@section('title', 'Account')

@section('content')
@if($message = Session::get('success'))
<strong class="success">
    <img src="/images/done.png" alt="img">
    <p>Well Done</p>
    <p>{{$message}}</p>
    <a href="{{ url('/dashboard') }}">Continue</a>
</strong>
@endif
<div class="container">
    <article>
        <ul>
            <h1>Your account details:</h1>
            @auth
            <li class="">First name: {{$user->first_name}}</li>
            <li class="">Last name: {{$user->last_name}}</li>
            <li class="">Country: {{$user->country}}</li>
            <li class="">Email: {{$user->email}}</li>
        </ul>


            <div>
                <a id="edit" href="{{ url('update/user') }}" class="btn btn-light">Edit</a>
            </div>
    <!-- </article> -->

    @if (!$booking == null)
    <!-- <article> -->
        <h1>Booking details:</h1>

        <ul>
            <li>Payment: {{ $booking->payment }}</li>
            <li>Date of creation: {{ $booking->created_at }}</li>
            <li>Last updated: {{ $booking->updated_at}}</li>
        </ul>

        <!--Hidden section for paid users-->
        @if ($booking->payment == 'done' )
        <h2>Flight Info</h2>
        <ul>
            <li>Depart: {{ $flight->depart_date}} at {{ $flight->depart_time}}</li>
            <li>Arrival: {{ $flight->arrival_date}} at {{ $flight->arrival_time}}</li>
            <li>Status :{{ $flight->status}}</li>
            <li>Itinerary :{{ $flight->itinerary}}</li>
            <li>Location :{{ $flight->location}}</li>
            <li>Flight ref. :{{ $flight->fly_ref}}</li>
        </ul>
    </article>


        <div>
            <p>


            </p>
        </div>

        <!-- Google maps-->
    <div id="launchInfo">

        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $flight->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org">pirate bay</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 600px;
                    }
                </style><a href="https://www.embedgooglemap.net">google map html generator</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 600px;
                    }
                </style>
            </div>
        </div>
        <div>
            <div>
                @if( $flight->location == 'Kennedy Space Center')
                    <!-- Giving the clients the addresses to the Spaceports -->
                    <p>Space Commerce Way <br>
                    Merritt Island <br>
                    FL 32953<br>
                    United States</p>
                @ifelse( $flight->location == 'Baikonur Cosmodrome')
                    <p>Abay Avenue 5<br>
                    Baikonur<br>
                    Kazakhstan</p>
                @ifelse( $flight->location == 'Guiana Space Center Kourou')
                    <p>Route de l'Espace<br>
                    Kourou<br>
                    French Guiana</p>
                @else

                    <P style="color: red">Spaceport not found</P>
                @endif
            </div>
            <div>
                @if( $flight->location == 'Kennedy Space Center')
                <!-- weather widget start -->
                <a target="_blank" href="https://hotelmix.fr/weather/orlando-19887">
                    <!-- weather widget start -->
                    <a target="_blank" href="https://www.booked.net/weather/orlando-19887">
                        <img src="https://w.bookcdn.com/weather/picture/32_19887_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=&anc_id=48006" alt="booked.net" /></a>
                    <!-- weather widget end -->
                    @ifelse( $flight->location == 'Baikonur Cosmodrome')
                    <!-- weather widget start -->
                    <a target="_blank" href="https://www.booked.net/weather/ayteke-bi-w651588">
                        <img src="https://w.bookcdn.com/weather/picture/32_w651588_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=&anc_id=48006" alt="booked.net" /></a>
                    <!-- weather widget end -->
                    @else
                    <!-- weather widget start --><a target="_blank" href="https://hotelmix.fr/weather/kourou-17000">
                        <img src="https://w.bookcdn.com/weather/picture/32_17000_1_3_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=581&anc_id=94940" alt="booked.net" /></a>
                    <!-- weather widget end -->
                    @endif
            </div>

        </div>
    </div>

        @endif
        @endif



        @endauth

    </ul>
</div>


@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection
