<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf



            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="nombre" value="{{ __('nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
            </div>

            <div>
                <x-jet-label for="apellido1" value="{{ __('apellido1') }}" />
                <x-jet-input id="apellido1" class="block mt-1 w-full" type="text" name="apellido1" :value="old('apellido1')" required autofocus autocomplete="apellido1" />
            </div>

            <div>
                <x-jet-label for="apellido2" value="{{ __('apellido2') }}" />
                <x-jet-input id="apellido2" class="block mt-1 w-full" type="text" name="apellido2" :value="old('apellido2')" autofocus autocomplete="apellido2" />
            </div>

            <div>
                <x-jet-label for="f_nacimiento" value="{{ __('f_nacimiento') }}" />
                <x-jet-input id="f_nacimiento" class="block mt-1 w-full" type="date" name="f_nacimiento" :value="old('f_nacimiento')" required autofocus autocomplete="f_nacimiento" />
            </div>

            <div>
                <x-jet-label for="movil" value="{{ __('movil') }}" />
                <x-jet-input id="movil" class="block mt-1 w-full" type="text" name="movil" :value="old('movil')" required autofocus autocomplete="movil" />
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
