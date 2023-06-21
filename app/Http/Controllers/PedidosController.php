<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidosController extends Controller

{
    //Vista de pedidos
    public function index(){
        $pedidos = Pedido::all();
        return view('pedidos.pedidos', compact('pedidos'));
    }

    //Vista de Formulario para crear un usuario
    public function create(){
        return view('crearPedido');
    }

    //Método que almacena los datos en la base de datos correspondiente a un pedido
    public function store(Request $request){
        Pedido::create($request->all());
        return redirect()->route('pedidos');
    }
    
    //Método que elimina un pedido
    public function destroy($id){
        Pedido::find($id)->delete();
        return redirect()->route('pedidos');
    }

    //Método que muestra la vista correspondiente a los detalles de un pedido.
    public function show($id){
        $pedido = Pedido::find($id);
        return view('pedidosDetalle', compact('pedido'));
    }

    //Método que actualiza los datos de un pedido
    public function edit(){
        
    }




    

}
