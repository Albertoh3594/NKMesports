<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nombre' => ['required', 'string'],
            'apellido1' => ['required', 'string'],
            'apellido2' => ['string'],
            'f_nacimiento' => ['required', 'date'],
            'movil' => ['required', 'numeric'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'email' => $input['email'],
            'nombre' => $input['nombre'],
            'apellido1' => $input['apellido1'],
            'apellido2' => $input['apellido2'],
            'f_nacimiento' => $input['f_nacimiento'],
            'movil' => $input['movil'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
