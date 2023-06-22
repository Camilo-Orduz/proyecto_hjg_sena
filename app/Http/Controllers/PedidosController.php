<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\pedido_detalle;
use Illuminate\Support\Facades\Cache;

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

        $pedido = Pedido::create();

        $numeroProductos = $request->input('numeroProductos');

        for($i = 1; $i <= $numeroProductos; $i++){
            $cantidad = $request->input('cantidad_' . $i);
            $subtotal = $request->input('subtotal_'. $i);
            $productoId = $request->input('productoId_'. $i);

            pedido_detalle::create([
                'pedidoId'=> $pedido->idPedido,
                'productoId' => $productoId,
                'cantidadProducto' => $cantidad,
                'subTotal' => $subtotal
                   
            ]);
        }

        $pedido->update([
            'empleadoIdentificacion' => $request->input('empleadoIdentificacion'),
            'fechaRadicacionPedido'=> $request->input('fechaRadicacionPedido'),
            'totalPedido'=> $request->input('totalPedido'),
        ]);

        Cache::flush();
        return redirect()->route('indexPedidos');  

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
