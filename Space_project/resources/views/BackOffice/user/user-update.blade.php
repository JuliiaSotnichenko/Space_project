@extends('BackOffice.bop-template')

@section('title', 'Update User')

@section('content')


<h2>Update user</h2>
<form action="" method="POST">
    @csrf
    {{-- @method('PUT') --}}
    <!-- Update Firstname -->
    <input type="text" name="firstname" placeholder="Firstname" value="{{$user->first_name}}"><br>
    @error('firstname')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Lastname -->
    <input type="text" name="lastname" placeholder="Lastname" value="{{$user->last_name}}"><br>
    @error('lastname')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Email -->
    <input type="email" name="email" placeholder="Email" value="{{$user->email}}"><br>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Country -->
    <input type="text" name="country" placeholder="Country" value="{{$user->country}}"><br>
    @error('country')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Training Status -->
    <select name="training_status" id="training_status">
        <option value="0">Pre-Training</option>
        <option value="1">Training Phase 1</option>
        <option value="2">Training Phase 2</option>
        <option value="3">Training Phase 3</option>
        <option value="4">Training Complete</option>
        <option value="5">Training Approved</option>
<   /select><br>
    @error('training_status')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Insert button -->
    <input type="submit" value="INSERT">
</form>
@endsection
