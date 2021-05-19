<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account details</title>
</head>

<body>
    <ul>
        <h1>Account details:</h1>
        @auth
        <li>First name: {{$user->first_name}}</li>
        <li>Last name: {{$user->last_name}}</li>
        <li>Country: {{$user->country}}</li>
        <li>Passport: {{$user->pass_port_number}}</li>
        <li>Email: {{$user->email}}</li>

        <a href="update/user" class="text-sm text-gray-700 underline">Edit</a>
        <a href="logout" class="text-sm text-gray-700 underline">Logout</a>

        <h1>Booking details:</h1>
        @foreach($bookings as $booking)
        <li>Payment: {{ $booking->payment }}</li>
        <li>Package: {{ $booking->package }}</li>
        <li>Date of creation: {{ $booking->created_at }}</li>
        <li>Last updated: {{ $booking->updated_at}}</li>

        <!--Hidden section for paid users-->
        @if ($booking->payment == 'done' )
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org">pirate bay</a><br>
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


        <h1>Trainning Info</h1>



        @endif
        @endforeach


        @endauth

    </ul>