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


        <h1>Booking details:</h1>
        @foreach($bookings as $booking)
        <li>Payment: {{ $booking->payment }}</li>
        <li>Package: {{ $booking->package }}</li>
        <li>Date of creation: {{ $booking->created_at }}</li>
        <li>Last updated: {{ $booking->updated_at}}</li>

        <br>
        @endforeach


        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
        @endauth





    </ul>

    

</body>