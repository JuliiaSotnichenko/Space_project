@extends('templates/template')

<!-- Style -->
@section('style')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .success {
        background-color: #fff;
        color: #243B7B;
        position: absolute;
        top: 200px;
        transform: translateX(-50%);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 10px 10px 10px 5px black;
        z-index: 1;

    }

    .success a {
        padding: 5px 20px;
        color: white;
        background-color: blue;
        border-radius: 10px;
        text-decoration: none;
    }

    .success a:hover {
        box-shadow: 5px 5px 5px black;
    }

    .success img {
        width: 80px;
    }

    .myBtn{
        color: white;
        padding: 8px 10px;
        text-decoration: none;
        background: linear-gradient(90deg, deeppink, blueviolet);
        transition: 0.2s; 
        transition-duration: 0.3s; 
        font-weight: bolder;
        width: 49%;
        border-radius: 10px;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 10px;
    }



</style>
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
<div class="form_container blokk ">
    <ul class="listAcc">
        <h1>Account details:</h1>
        @auth
        <li class="">First name: {{$user->first_name}}</li>
        <li class="">Last name: {{$user->last_name}}</li>
        <li class="">Country: {{$user->country}}</li>
        <li class="">Email: {{$user->email}}</li>

        <div>
            <a href="{{ url('update/user') }}" style="padding: 4px 10px" class="myBtn btn-light">Edit</a>
        </div>
        <hr>
        <!-- </article> -->

        @if (!$booking == null)
        <!-- <article> -->
        <h1>Booking details:</h1>

        <li>Payment: {{ $booking->payment }}</li>
        <li>Date of creation: {{ $booking->created_at }}</li>
        <li>Last updated: {{ $booking->updated_at}}</li>
        <hr>

        <!--Hidden section for paid users-->
        @if ($booking->payment == 'done' )
        <h1>Flight Info</h1>

        <li>Depart: {{ $flight->depart_date}} at {{ $flight->depart_time}}</li>
        <li>Arrival: {{ $flight->arrival_date}} at {{ $flight->arrival_time}}</li>
        <li>Status: {{ $flight->status}}</li>
        <li>Itinerary: {{ $flight->itinerary}}</li>
        <li>Location: {{ $flight->location}}</li>
        <li>Flight ref.: {{ $flight->fly_ref}}</li>

        <div>
            <hr>
            <h2>Adress</h2>
            @if( $flight->location == 'NASA Kennedy Space Center')
            <!-- Giving the clients the addresses to the Spaceports -->
            <p class="address">NASA Space Commerce Way <br>
                Merritt Island <br>
                FL 32953<br>
                United States</p>
            @elseif( $flight->location == 'Baikonur Cosmodrome')
            <p>Abay Avenue 5<br>
                Baikonur<br>
                Kazakhstan</p>
            @elseif( $flight->location == 'Guiana Space Center Kourou')
            <p>Route de l'Espace<br>
                Kourou<br>
                French Guiana</p>

            @endif
        </div>
    </ul>
    <div>
        <ul>

            
            <div class='container'>
                
              <h1 style="font-weight: bold;">Useful information</h1>
              <hr>
                <div>
                    @if( $flight->location == 'NASA Kennedy Space Center')
                    <!-- weather widget start -->
                    <a target="_blank" href="https://hotelmix.fr/weather/orlando-19887">
                        <!-- weather widget start -->
                        <a target="_blank" href="https://www.booked.net/weather/orlando-19887">
                            <img src="https://w.bookcdn.com/weather/picture/32_19887_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=&anc_id=48006" alt="booked.net" /></a>
                        <!-- weather widget end -->
                        @elseif( $flight->location == 'Baikonur Cosmodrome')
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

            <hr>
            <!-- Google maps-->
            

            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="600" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $flight->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org">pirate bay</a><br>
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