@extends('BackOffice.bop-template')

@section('title', 'Update Booking')

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
