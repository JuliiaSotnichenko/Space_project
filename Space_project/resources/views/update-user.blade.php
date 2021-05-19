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
    <input type="text" name="pass_port_number" placeholder="Passport number" value="{{$user->pass_port_number}}"><br>
    @error('pass_port_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="email" placeholder="Email" value="{{$user->email}}"><br>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="INSERT">
    @else
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Log in</a>
    @endauth
</form>

@yield('footer-backend')

