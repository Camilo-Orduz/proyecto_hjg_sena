<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //Vista con el listado de los productos creados.
    public function index(){
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    //Vista con el formulario para crear un producto
    public function create(){
        return view('productos.registrarProducto');
    }

    //Método que almacena en la base de datos el producto
    public function store(Request $request){
        Producto::create($request->all());
        return redirect()->route('indexProductos');
    }

    //Vista de los detalles del producto
    public function show($id){
        $producto = Producto::find($id);
        return view('productos.detallesProducto', compact('producto'));
    }

    //Vista con formulario para editar los datos de un producto
    public function edit($id){
        $producto = Producto::find($id);
        return view('productos.editarProducto', compact('producto'));
    }

    //Método que actualiza los datos de un producto en la base de datos
    public function update(Request $request, $id){
        Producto::find($id)->update($request->all());
        return view('productos.indexProductos');
    }

    //Método para eliminar un producto
    public function destroy($id){
        Producto::find($id)->delete();
        return redirect()->route('indexProductos');
    }








}
