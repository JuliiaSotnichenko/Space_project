@extends('BackOffice.bop-template')

@section('title', 'Update Booking')

@section('style')
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
</style>
@endsection
@section('content')
<h2>Update Booking</h2>
<form action="" method="POST">
    @csrf
    @method('PUT')
    <!-- Update User_id -->
    <input type="text" name="user_id" placeholder="user_id" value="{{$booking->user_id}}"><br>
    @error('user_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Flight_id -->
    <input type="text" name="flight_id" placeholder="flight_id" value="{{$booking->flight_id}}"><br>
    @error('flight_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Payment_status -->
    <input type="text" name="payment_status" placeholder="payment_status" value="{{$booking->payment_status}}"><br>
    @error('payment_status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Insert button -->
    <input type="submit" value="INSERT">
</form>
@endsection
