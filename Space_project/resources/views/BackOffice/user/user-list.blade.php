<!-- Template include -->
@extends('BackOffice.bop-template')
<!-- Tab title -->
@section('title', 'Users list')
<!-- Section to inject to template -->
@section('content')

    @foreach($users as $user)
    <div class="card">
    <li>
        <p>User ID: {{$user->id}}</p>
        <p>Firstname: {{ $user->first_name }}</p>
        <p>Lastname: {{ $user->last_name }}</p>
        <p>Email: {{ $user->email }}</p>
    </li>
    <p class="link"><a class="mybutton" href="{{ url('/admin/user', $user->id) }}">Details</a></p>

</div>

    @endforeach
@endsection
