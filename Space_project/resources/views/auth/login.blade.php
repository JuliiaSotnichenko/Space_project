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