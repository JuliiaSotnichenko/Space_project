<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <main>

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
            <input type="submit" value="INSERT">
            @else
            @endauth
        </form>
    </main>
</body>