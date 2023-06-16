<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Producto;

class EntradasController extends Controller
{
    //Vista de entradas (?)
    public function index(){
        return view('/entradaProductos/index');
    }

    //Vista con el formulario para crear un producto
    public function create(){
        $productos = Producto::all();
        return view('/entradaProductos/registroEntrada', compact('productos'));
    }

    //Método que almacena en la base de datos la entrada correspondiente a un producto
    public function store(Request $request){
        //Guarda el registro de entrada en la tabla 'Entrada'
        $entrada = Entrada::create($request->all());

        //Actualiza la cantidad de stock en la tabla 'Producto'
        $producto = $entrada->producto;
        $producto->stockProducto += $entrada->cantidadProducto;
        $producto->save();
        return redirect()->route('indexEntradas');
    }
}
