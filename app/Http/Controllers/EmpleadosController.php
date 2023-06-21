<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    public function store(){
        
    }

    public function show($id){
        $empleado = User::with('tipo_documento')->find($id);
        return view('empleados.detallesEmpleado', compact('empleado'));
    }
}
