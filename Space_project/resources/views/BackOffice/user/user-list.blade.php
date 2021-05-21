<!-- Template include -->
@extends('BackOffice.bop-template')
<!-- Tab title -->
@section('title', 'Users list')
<!-- Section to inject to template -->
@section('content')
<ul>
    @foreach($users as $user)
    <li>
    <p>User ID: {{$user->id}}</p>
    <p>Firstname: {{ $user->first_name }}</p>
    <p>Lastname: {{ $user->last_name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p><a href="{{ url('/admin/user', $user->id) }}">Details</a></p>
    </li>
    <br>
    @endforeach
</ul>
@endsection
