@extends('BackOffice.bop-template')

@section('title', 'Update User')

@section('content')


<h2>Update user</h2>
<form action="" method="POST">
    @csrf
    @method('PUT')
    <!-- Update Firstname -->
    <input type="text" name="first_name" placeholder="First name" value="{{$user->first_name}}"><br>
    @error('firstname')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Lastname -->
    <input type="text" name="last_name" placeholder="Lastname" value="{{$user->last_name}}"><br>
    @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Country -->
    <input type="text" name="country" placeholder="Country" value="{{$user->country}}"><br>
    @error('country')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Email -->
    <input type="text" name="email" placeholder="Email" value="{{$user->email}}"><br>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- Update Training Status -->
    <select name="training_status" id="training_status">
        <option value="Pre-Training">Pre-Training</option>
        <option value="Training Phase 1">Training Phase 1</option>
        <option value="Training Phase 2">Training Phase 2</option>
        <option value="Training Phase 3">Training Phase 3</option>
        <option value="Training Complete">Training Complete</option>
        <option value="Training Approved">Training Approved</option>
        < /select><br>
            @error('training_status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <!-- Insert button -->
            <input type="submit" value="INSERT">
</form>
@endsection
