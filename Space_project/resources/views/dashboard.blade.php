<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account details</title>
<<<<<<< Updated upstream

<body>
=======
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<nav class="main__navig">
            <a href="{{ url('home') }}">
                <img class="logo" src="images/logoSF.svg" alt="Starlight logo">
            </a>
            <ul class="main__navig_list">
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="{{ url('menu') }}">Menu</a></li>
                <li><a href="{{ url('about us') }}">About us</a></li>
                <li><a href="{{ url('history') }}">History</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>

                @if(Auth::check())

                <li><a href="{{ url('dashboard') }}">Account</a></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            </ul>
        </nav>
<main>
>>>>>>> Stashed changes

    <div>
        <ul>
            <h1>Account details:</h1>
            @auth
            <li>First name: {{$user->first_name}}</li>
            <li>Last name: {{$user->last_name}}</li>
            <li>Country: {{$user->country}}</li>
            <li>Email: {{$user->email}}</li>


            <button onclick="window.location.href='update/user'">Edit</button>
            <button onclick="window.location.href='logout'">Logout</button>



            @if (!$booking == null)
            <h1>Booking details:</h1>

            <li>Payment: {{ $booking->payment }}</li>
            <li>Package: {{ $booking->package }}</li>
            <li>Date of creation: {{ $booking->created_at }}</li>
            <li>Last updated: {{ $booking->updated_at}}</li>

            <!--Hidden section for paid users-->
            @if ($booking->payment == 'done' )
            <h2>Flight Info</h2>

            <li>Depart: {{ $flight->depart_date}} at {{ $flight->depart_time}}</li>
            <li>Arrival: {{ $flight->arrival_date}} at {{ $flight->arrival_time}}</li>
            <li>Status :{{ $flight->status}}</li>
            <li>Itinerary :{{ $flight->itinerary}}</li>
            <li>Location :{{ $flight->location}}</li>
            <li>Flight ref. :{{ $flight->fly_ref}}</li>

            <div>
                <p>


                </p>
            </div>

            <!-- Google maps-->

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
            <div> @if( $flight->location == 'NASA Kennedy Space Center')
                <!-- weather widget start --><a target="_blank" href="https://hotelmix.fr/weather/orlando-19887">
                    <!-- weather widget start --><a target="_blank" href="https://www.booked.net/weather/orlando-19887">
                        <img src="https://w.bookcdn.com/weather/picture/32_19887_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=&anc_id=48006" alt="booked.net" /></a><!-- weather widget end -->
                    @else
                    <!-- weather widget start --><a target="_blank" href="https://www.booked.net/weather/ayteke-bi-w651588">
                        <img src="https://w.bookcdn.com/weather/picture/32_w651588_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=&anc_id=48006" alt="booked.net" /></a><!-- weather widget end -->

                    @endif
            </div>

            @endif
            @endif


            @endauth


<<<<<<< Updated upstream
        </ul>
    </div>
</body>
=======
    </ul>
    </main>
  
    
        
    </body>
>>>>>>> Stashed changes
