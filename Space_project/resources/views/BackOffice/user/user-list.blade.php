<!-- Template include -->
@extends('BackOffice.bop-template')
<!-- Tab title -->
@section('title', 'Users list')
<!-- Section to inject to template -->
@section('content')
<br>
    @foreach($users as $user)
    <li>
    <p>User ID: {{$user->id}}</p>
    <p>Firstname: {{ $user->first_name }}</p>
    <p>Lastname: {{ $user->last_name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p><a href="{{ url('/admin/user', $user->id) }}">Details</a></p>
    </li>
    <!-- <br> -->
    <a href="{{ url('/admin/user', $user->id) }}" class="btn btn-primary">User's details</a>
  </div>
</div>
<br>
    @endforeach
@endsection
