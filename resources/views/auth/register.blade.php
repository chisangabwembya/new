<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="f_name" :value="__('First Name')" />

                <x-input id="f_name" class="block mt-1 w-full" type="text" name="f_name" :value="old('f_name')" required autofocus />
            </div>

                        <!-- Last Name -->
            <div>
            <x-label for="l_name" :value="__('Last Name')" />

                <x-input id="l_name" class="block mt-1 w-full" type="text" name="l_name" :value="old('name')" required autofocus />
            </div>

                                    <!-- dob -->
                                    <div>
            <x-label for="dob" :value="__('Date of Birth')" />

                <x-input id="dob" class="block mt-1 w-full" type="text" name="dob" :value="old('dob')" required autofocus />
            </div>

                                <!-- nrc -->
                                <div>
            <x-label for="dob" :value="__('National Registeration Card')" />

                <x-input id="nrc" class="block mt-1 w-full" type="text" name="nrc" :value="old('nrc')" required autofocus />
            </div>

                                 <!-- phone -->
              <div>
            <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

                   <!-- address-->
                   <div>
            <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>

                  <!-- area-->
                  <div>
            <x-label for="area" :value="__('Area')" />

                <x-input id="area" class="block mt-1 w-full" type="text" name="area" :value="old('area')" required autofocus />
            </div>

                              <!-- street-->
                              <div>
            <x-label for="street" :value="__('Street')" />

                <x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required autofocus />
            </div>

                  <!--town-->
                  <div>
            <x-label for="town" :value="__('Town')" />

                <x-input id="town" class="block mt-1 w-full" type="text" name="town" :value="old('town')" required autofocus />
            </div>

                              <!-- province-->
                              <div>
            <x-label for="province" :value="__('Province')" />

                <x-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province')" required autofocus />
            </div>

                  <!-- country-->
                  <div>
            <x-label for="country" :value="__('Country')" />

                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus />
            </div>

          <!-- bank_name-->
          <div>
            <x-label for="bank_name" :value="__('Bank Name')" />

                <x-input id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" :value="old('bank_name')" required autofocus />
            </div>

         <!-- bank_account-->
         <div>
            <x-label for="bank_account" :value="__('Bank Account')" />

                <x-input id="bank_account" class="block mt-1 w-full" type="text" name="bank_account" :value="old('bank_account')" required autofocus />
            </div>
            
<!-- bank_branch-->
<div>
            <x-label for="bank_branch" :value="__('Bank Branch')" />

                <x-input id="bank_branch" class="block mt-1 w-full" type="text" name="bank_branch" :value="old('bank_branch')" required autofocus />
            </div>
            
<!-- bank_address-->
<div>
            <x-label for="bank_address" :value="__('Bank Address')" />

                <x-input id="bank_address" class="block mt-1 w-full" type="text" name="bank_address" :value="old('bank_address')" required autofocus />
            </div>

          <!-- phone_number-->
<div>
            <x-label for="phone_number" :value="__('Phone Number')" />

                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus />
            </div> 

<!-- bank_email-->
<div>
            <x-label for="bank_email" :value="__('Bank Email')" />

                <x-input id="bank_email" class="block mt-1 w-full" type="text" name="bank_email" :value="old('bank_email')" required autofocus />
            </div>
            
<!-- client_type-->
<div>
            <x-label for="client_type" :value="__('Client Type')" />

                <x-input id="client_type" class="block mt-1 w-full" type="text" name="client_type" :value="old('client_type')" required autofocus />
            </div>

<!-- hobbies-->
<div>
            <x-label for="hobbies" :value="__('Hobbies')" />

                <x-input id="hobbies" class="block mt-1 w-full" type="text" name="hobbies" :value="old('hobbies')" required autofocus />
            </div>

<!-- sex-->
<div>
            <x-label for="sex" :value="__('Sex')" />

                <x-input id="sex" class="block mt-1 w-full" type="text" name="sex" :value="old('sex')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
