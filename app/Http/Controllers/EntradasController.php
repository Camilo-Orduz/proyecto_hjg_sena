<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Producto;

use function PHPUnit\Framework\returnSelf;

class EntradasController extends Controller
{
    //Vista de entradas
    public function index(){
        $entradas = Entrada::all();
        return view('/entradaProductos/index', compact('entradas'));
    }

    //Vista con el formulario para crear una entrada
    public function create(){
        $productos = Producto::all();
        return view('/entradaProductos/registroEntrada', compact('productos'));
    }

    //Método que almacena en la base de datos la entrada correspondiente a una entrada
    public function store(Request $request){
        //
        $request->validate([
            'productoId' => 'required',
            'cantidadProducto' => 'required',
            'detallesEntrada' => 'required'
            ]);
        //Guarda el registro de entrada en la tabla 'Entrada'
        $entrada = Entrada::create($request->all());

        //Actualiza la cantidad de stock en la tabla 'Producto'
        $producto = $entrada->producto;
        $producto->stockProducto += $entrada->cantidadProducto;
        $producto->save();
        return redirect()->route('indexEntradas');
    }

    //Vista con el formulario para editar una entrada
    public function edit($id){
        $entrada = Entrada::find($id);
        $productos = Producto::all();
        return view('/entradaProductos/editarEntrada', compact('entrada'), compact('productos'));
    }

    //Método que actualiza los datos en la base de datos de la entrada
    public function update(Request $request, $id){
        Entrada::find($id)->update($request->all());
        return redirect()->route('indexEntradas');
    }

    //Método para eliminar entrada y que se actualice el stock del producto
    public function destroy($id){
        $entrada = Entrada::find($id);

        $producto = Producto::findOrFail($entrada->productoId);
        $producto->stockProducto -= $entrada->cantidadProducto;
        $producto->save();

        $entrada->delete();
        return redirect()->route('indexEntradas');
    }
}
