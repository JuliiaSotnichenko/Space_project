<!-- Template include -->
@extends('BackOffice.bop-template')
<!-- Tab title -->
@section('title', 'User Details')
<!-- Section to inject to template -->
@section('content')
    <!-- User's info display -->
    <h2>User detail</h2>
    <p>Firstname: {{ $user->first_name }}</p>
    <p>Lastname: {{ $user->last_name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Country: {{ $user->country }}</p>
    <p>Training Status: {{ $user->training_status }}</p>
    <!-- User's info edit button -->
    <p><a href="{{ url('/admin/edit/user', $user->id) }}">Edit User</a></p>
    <!-- Delete User button -->
    <p><a href="{{ url('/admin/delete/user', $user->id) }}">Delete User</a></p>
    
@endsection


