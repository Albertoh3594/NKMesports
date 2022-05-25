<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <x-jet-label for="email" value="{{ __('email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email"/>
                </div>

                <div class="mb-4">
                    <x-jet-label for="nombre" value="{{ __('nombre') }}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="apellido1" value="{{ __('apellido1') }}" />
                    <x-jet-input id="apellido1" class="block mt-1 w-full" type="text" name="apellido1" :value="old('apellido1')" required autofocus autocomplete="apellido1" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="apellido2" value="{{ __('apellido2') }}" />
                    <x-jet-input id="apellido2" class="block mt-1 w-full" type="text" name="apellido2" :value="old('apellido2')" autofocus autocomplete="apellido2" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="f_nacimiento" value="{{ __('f_nacimiento') }}" />
                    <x-jet-input id="f_nacimiento" class="block mt-1 w-full" type="date" name="f_nacimiento" :value="old('f_nacimiento')" required autofocus autocomplete="f_nacimiento" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="tlf_movil" value="{{ __('tlf_movil') }}" />
                    <x-jet-input id="tlf_movil" class="block mt-1 w-full" type="text" name="tlf_movil" :value="old('tlf_movil')" required autofocus autocomplete="tlf_movil" />
                </div>


                <div class="mb-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mb-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
