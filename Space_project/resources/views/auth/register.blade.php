<x-guest-layout>

    <x-slot name="logo">
        <a href="/">
            <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="form_container_reg">
        <form class="login_form_reg" method="POST" action="{{ route('register') }}">
            @csrf
            
            <!--First Name -->
            <div>
                <x-label for="first_name" /><br>

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" placeholder="first name" :value="old('first_name')" required autofocus />
            </div>
            <!--Last Name -->
            <div>
                <x-label for="last_name" /><br>

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" placeholder="last name" :value="old('last_name')" required autofocus />
            </div>
            <!--Coountry -->
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
            <!-- Subscribe -->
            <div class="input-group mb-4">
        <div class="input-group mb-4">
        <input class="verif" type="checkbox" name="subscribed" value="1" />
                 Subscribe to the newsletter
    </div>
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

</x-guest-layout>
<!-- :value="__('Country')"  -->
<!-- <div class="container__main">
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
</div> -->