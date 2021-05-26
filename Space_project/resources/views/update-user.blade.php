@extends('templates/template')

<!-- Style -->
@section('style')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('title', 'Update Account')

@section('content')
<style>
    .content_template{
  min-height: 50vh;
}
    .mycontainer {
        width: 400px;
        height: 400px;
        font-family: 'Space Grotesk', sans-serif;
        line-height: 20px;
        padding: 10px;
        background-color: white;
        margin: auto;
        margin-top: 80px;
        border-radius: 10px;

    }
    .mycontainer:hover{
        box-shadow: 5px 5px 5px black;
    }

h2{
    color: black;
    margin-top: 20px;
    margin-bottom: 20px;
}
footer{
 height: 45vh;
}


</style>
<div class="mycontainer text-light">

    <h2>Update User</h2>
    <form action="" method="post">
        @csrf
        @auth
        @method('PUT')
        <input type="text" name="first_name" placeholder="First name" value="{{$user->first_name}}"><br>
        @error('first_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="last_name" placeholder="Last name" value="{{$user->last_name}}"><br>
        @error('last_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="country" placeholder="Country" value="{{$user->country}}"><br>
        @error('country')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="email" placeholder="Email" value="{{$user->email}}"><br>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="btn btn-light" type="submit" value="Update">
        @else
        @endauth
    </form>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection