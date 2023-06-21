<?php

namespace App\Http\Controllers;

use App\Models\tipo_documento;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use PasswordValidationRules as PasswordRules;

class EmpleadosController extends Controller
{
    

    //Vista con el listado de empleados registrados
    public function index(){
        $empleados = User::all();
        return view('empleados.index', compact('empleados'));
    }

    //Vista con el formulario de registro de empleado
    public function create(){
        return view('auth.register');
    }

    //Método que almacena en la base de datos al nuevo empleado
    public function store(Request $request)
        {
            $validatedData = $request->validate([
                'identificacionEmpleado' => ['required', 'integer', 'unique:users'],
                'tipoDocumentoId' => ['required', 'string', 'max:255'],
                'nombresEmpleado' => ['required', 'string', 'max:255'],
                'apellidosEmpleado' => ['required', 'string', 'max:255'],
                'telefonoEmpleado' => ['required', 'integer'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string'],
            ]);
    
            $user = User::create([
                'identificacionEmpleado' => $validatedData['identificacionEmpleado'],
                'tipoDocumentoId' => $validatedData['tipoDocumentoId'],
                'nombresEmpleado' => $validatedData['nombresEmpleado'],
                'apellidosEmpleado' => $validatedData['apellidosEmpleado'],
                'telefonoEmpleado' => $validatedData['telefonoEmpleado'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            return redirect()->route('indexEmpleados');
        }
    
    //Método que redirecciona a la vista con los detalles de un empleado
    public function show($id){
        $empleado = User::with('tipo_documento')->find($id);
        return view('empleados.detallesEmpleado', compact('empleado'));
    }

    public function edit($id){
        $documentos = tipo_documento::all();
        $empleado = User::with('tipo_documento')->find($id);
        return view('empleados.editarEmpleado', compact('empleado'), compact('documentos'));
    }

    public function update(Request $request, $id){
        User::find($id)->update($request->all());
        return redirect()->route('indexEmpleados');
    }


    //Método que elimina un empleado
    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->route('indexEmpleados');
    }
}
