@extends('BackOffice.bop-template')

@section('title', 'Manage Users')
@section('content')
<section>
    <article>
        <label for="search">Search</label>
        <input type="text" name="search">
        <br>
    </article>

    <article>
        <label for="results">Results</label>
        <div id="results">
            <label for="first_name">Firstname</label>
            <p>{{$user->first_name}}</p>
            <label for="last_name">Lastname</label>
            <p>{{$user->last_name}}</p>
            <label for="pass_port_number">Passport Number</label>
            <p>{{$user->pass_port_number}}</p>
            <label for="country">Country</label>
            <p>{{$user->country}}</p>
            <label for="email">Email Address</label>
            <p>{{$user->email}}</p>
            <br>
        </div>
    </article>
    <article>
        <form action="" method="POST">
        @csrf
            <label for="first_name">Firstname</label>
            <input type="text" name="first_name" value="">
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <label for="last_name">Lastname</label>
            <input type="text" name="last_name" value="">
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <label for="pass_port_number">Passport Number</label>
            <input type="text" name="pass_port_number" value="">
                @error('pass_port_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <label for="country">Country</label>
            <input type="text" name="country" value="">
                @error('country')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <label for="email">Email Address</label>
            <input type="email" name="email" value="">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <br>
            <input type="submit" value="Apply changes">
            <br>
        </form>
    </article>
    <article>
        <input type="submit" value="Delete user entry">
    </article>
</section>
@endsection