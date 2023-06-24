<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Producto;

class pedidoDetalleController extends Controller
{
    public function indexProductos(){
        $productos = Producto::all();

        return view('pedidos.productosPedido', compact('productos'));
    }

    public function pedidoDetalles(){
        $productos = Producto::all();
        $datosFormulario = Cache::get('datos_formulario');
        return view('pedidos.pedidoDetalle', compact('productos'), compact('datosFormulario'));
    }

    public function store(Request $request){
        // Recuperar los datos existentes del cache
        $datosFormulario = Cache::get('datos_formulario', []);

        $producto = [
            'idProducto' => $request->input('idProducto'),
            'nombreProducto' => $request->input('nombreProducto'),
            'stockProducto' => $request->input('stockProducto'),
            'precioProducto' => $request->input('precioProducto'),
            'imagenProducto' => $request->input('imagenProducto')
        ];
        

        $datosFormulario[] = $producto;
        

        Cache::put('datos_formulario', $datosFormulario, 600);
        return redirect()->route('detallesPedido');
    }

    public function eliminarProducto($id){
        Cache::forget($id);
        
        return redirect()->back();
    }

}
