<style>
    .success {
        z-index: 1;
        background-color: #fff;
        color: #243B7B;
        position: absolute;
        top: 250px;
        right: 460px;
        /* transform: translateX(50%); */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 10px 10px 10px 5px black;
        margin: 50px;
        width: 350px;

        transition-duration: 0.3s;


    }

    .success a {
        padding: 10px 20px;
        color: white;
        background-color: red;
        border-radius: 10px;
        text-decoration: none;
    }

    .success a:hover {
        box-shadow: 5px 5px 5px black;
        color: white;
        text-decoration: none;
    }

    .success img {
        width: 80px;
    }
</style>
@if($message = Session::get('success'))
<strong class="success">
    <img src="/images/notdon.png" alt="img">
    <p>{{$message}}</p>
    <a href="{{ url('/login') }}">Continue</a>
</strong>
@endif

<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
        </a>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="form_container">


        <form class="login_form" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('E-mail :')" /><br>
                <x-input id="email" class="block mt-1 w-full" placeholder="" type="email" name="email" :value="old('Email')" required autofocus />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password :')" /><br>
                <x-input id="password" class="block mt-1 w-full" placeholder="" type="password" name="password" required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->


            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-white-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif<br>

                <x-button class="ml-3 btn btn-secondary">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

</x-guest-layout>
<div class="container__main">
    <div class="planet">
        <div class="wrap">
            <div class="background"></div>
            <div class="clouds">
                <!-- <img src="http://artem.anmedio.ru/dev/planet/clouds.png) " alt=""> -->
            </div>
        </div>
        <div class="mask">
            <!-- <img src="http://artem.anmedio.ru/dev/planet/mars.jpg" alt=""> -->
        </div>
    </div>
</div>