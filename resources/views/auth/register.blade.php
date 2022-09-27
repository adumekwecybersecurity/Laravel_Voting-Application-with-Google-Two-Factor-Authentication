<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf


            <div>
                <x-jet-label for="stud_ID" value="{{ __('STUDENT-ID') }}" />
                <x-jet-input id="stud_ID" class="block mt-1 w-full" type="text" name="stud_ID" :value="old('stud_ID')" required autofocus autocomplete="stud_ID" />
            </div>


            <div>
                <x-jet-label for="firstName" value="{{ __('First-Name') }}" />
                <x-jet-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="firstName" />
            </div>

            <div>
                <x-jet-label for="midName" value="{{ __('Middle-Name') }}" />
                <x-jet-input id="midName" class="block mt-1 w-full" type="text" name="midName" :value="old('midName')" required autofocus autocomplete="midName" />
            </div>


            <div>
                <x-jet-label for="surName" value="{{ __('SurName') }}" />
                <x-jet-input id="surName" class="block mt-1 w-full" type="text" name="surName" :value="old('surName')" required autofocus autocomplete="surName" />
            </div>

            <div>
                <x-jet-label for="userName" value="{{ __('USERName') }}" />
                <x-jet-input id="userName" class="block mt-1 w-full" type="text" name="userName" :value="old('userName')" required autofocus autocomplete="userName" />
            </div>

            <div>
                <x-jet-label for="DOB" value="{{ __('DATE OF BIRTH') }}" />
                <x-jet-input id="DOB" class="block mt-1 w-full" type="date" name="DOB" :value="old('DOB')" required autofocus />
            </div>

            <div>
                <x-jet-label for="gender" value="{{ __('GENDER') }}" />
                <x-jet-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required autofocus autocomplete="gender" />
            </div>

            <div>
                <x-jet-label for="Address1" value="{{ __('FIRST-ADDRESS') }}" />
                <x-jet-input id="Address1" class="block mt-1 w-full" type="text" name="Address1" :value="old('Address1')" required autofocus autocomplete="Address1" />
            </div>



            <div>
                <x-jet-label for="Address2" value="{{ __('SECOND-ADDRESS') }}" />
                <x-jet-input id="Address2" class="block mt-1 w-full" type="text" name="Address2" :value="old('Address2')" required autofocus autocomplete="Address2" />
            </div>

            <div>
                <x-jet-label for="Dept" value="{{ __('DEPARTMENT') }}" />
                <x-jet-input id="Dept" class="block mt-1 w-full" type="text" name="Dept" :value="old('Dept')" required autofocus autocomplete="Dept" placeholder="e.g: Cyber-Security"/>
            </div>
 
            <div>
                <x-jet-label for="phone" value="{{ __('PHONE-NUMBER') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>




            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
