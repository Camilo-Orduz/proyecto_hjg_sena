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
            'identificacionEmpleado' => ['required', 'integer', 'unique:users'],
            'tipoDocumentoId' => ['required', 'string', 'max:255'],
            'nombresEmpleado' => ['required', 'string', 'max:255'],
            'apellidosEmpleado' => ['required', 'string', 'max:255'],
            'telefonoEmpleado' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'identificacionEmpleado' => $input['identificacionEmpleado'],
            'tipoDocumentoId' => $input['tipoDocumentoId'],
            'nombresEmpleado' => $input['nombresEmpleado'],
            'apellidosEmpleado' => $input['apellidosEmpleado'],
            'telefonoEmpleado' => $input['telefonoEmpleado'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
