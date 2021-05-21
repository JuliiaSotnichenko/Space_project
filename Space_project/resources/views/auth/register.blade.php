<x-guest-layout>
    <nav class="main__navig">
        <a href="{{ url('home') }}">
            <!-- <img class="logo" src="images/logoSF.svg" alt="Starlight logo"> -->
        </a>
        <ul class="main__navig_list">
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('about us') }}">About us</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <x-slot name="logo">
        <a href="/">
            <div class="font-sans text-gray-900 antialiased">

                <x-slot name="logo">
                    <a href="/">
                        <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
                    </a>
                </x-slot>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="form_container_reg">
        <form class="login_form_reg" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="first_name" /><br>

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" placeholder="first name" :value="old('first_name')" required autofocus />
            </div>
            <div>
                <x-label for="last_name" /><br>

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" placeholder="last name" :value="old('last_name')" required autofocus />
            </div>
            <div>
                <x-label for="country" /><br>
                <x-input id="country" class="block mt-1 w-full" type="text" name="country" placeholder="country" :value="old('country')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" /><br>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="email" :value="old('email')" required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" /><br>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" /><br>

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="confirm password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a><br>

                <x-button class="ml-4  btn btn-secondary">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
    </div>

    </x-auth-card>
</x-guest-layout>