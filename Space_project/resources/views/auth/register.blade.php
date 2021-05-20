<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
<div class="form_container">
        <form class="login_form_reg" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="first_name" :value="__('First name')" /><br>

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>
            <div>
                <x-label for="last_name" :value="__('Last name')" /><br>

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
            </div>
            <div>
                
            </div>
            <div>
                <x-label for="country" :value="__('Country')" /><br>

                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus />
            </div>
         
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" /><br>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" /><br>

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" /><br>

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
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
    </x-auth-card>
</x-guest-layout>