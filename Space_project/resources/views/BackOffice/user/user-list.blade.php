<!-- Template include -->
@extends('BackOffice.bop-template')
<!-- Tab title -->
@section('title', 'Users list')
<!-- Section to inject to template -->
@section('content')
<ul>
    @foreach($users as $user)
    <li>User ID: {{$user->id}}</li>
    <li>Firstname: {{ $user->first_name }}</li>
    <li>Lastname: {{ $user->last_name }}</li>
    <li>Email: {{ $user->email }}</li>   
    <li><a href="{{ url('/admin/user/{id}', $user->id) }}">Details</a></li>
    <br>
    @endforeach
</ul>
@endsection
