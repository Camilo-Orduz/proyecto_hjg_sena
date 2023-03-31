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
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'num_ident' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'numero_identificacion' => $input['num_ident'],
            'nombres_empleado' => $input['name'],
            'apellidos_empleado' => $input['apellidos'],
            'telefono_empleado' => $input['telefono'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
