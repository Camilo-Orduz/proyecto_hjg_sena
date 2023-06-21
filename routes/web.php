<?php

use App\Http\Controllers\EntradasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\pedidoDetalleController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
})->group(function () {
    Route::get('/inicio-articulos', function () {
        return view('articulos');
    })->name('inicio-articulos');
})->group(function () {
    Route::get('registro-pedido', function () {
        return view('registro_pedido');
    })->name('registro-pedido');

})->group(function () {
    Route::get('productos-form', function () {
        return view('productos.registrarProducto');
    })->name('productos-form');
})->group(function () {
    Route::get('producto-salida', function () {
        return view('salida');
    })->name('producto-salida');
})->group(function () {
    Route::get('empleados-administrad', function () {
        return view('/empleados/empleadosVAdmin');
    })->name('empleados-administrad');
})->group(function () {
    Route::get('info-empleados', function () {
        return view('/empleados/info-empleado');
    })->name('info-empleados');
});

//Rutas Producto
Route::get('/productos', [ProductosController::class, 'index'])->name('indexProductos');
Route::get('/productos/crear', [ProductosController::class, 'create']);
Route::post('/productos', [ProductosController::class, 'store'])->name('crearProducto');
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('eliminarProducto');
Route::get('/productos/editar/{id}', [ProductosController::class, 'edit'])->name ('formEditarProducto');
Route::put('/productos/editar/{id}/update', [ProductosController::class, 'update'])->name('actualizarProducto');
Route::get('/productos/detalle/{id}', [ProductosController::class,'show'])->name('mostrarProducto');

//Rutas Entradas
Route::get('/entradas', [EntradasController::class, 'index'])->name('indexEntradas');
Route::get('/entradas/crear', [EntradasController::class, 'create'])->name('formEntrada');
Route::post('/entradas', [EntradasController::class, 'store'])->name('crearEntrada');
Route::get('/entradas/editar/{id}', [EntradasController::class, 'edit'])->name('formEditar');
Route::put('/entradas/editar/{id}/update', [EntradasController::class, 'update'])->name('editarEntrada');
Route::delete('/entradas/{id}', [EntradasController::class, 'destroy'])->name('eliminarEntrada');

//Rutas Empleados
Route::get('/empleados', [EmpleadosController::class, 'index'])->name('indexEmpleados');
Route::get('/empledos/crear', [EmpleadosController::class, 'create'])->name('crearEmpleado');
Route::get('/empledos/editar/{id}', [EmpleadosController::class, 'edit'])->name('editarEmpleado');
Route::put('/empledos/editar/{id}/update', [EmpleadosController::class, 'update'])->name('formEditarEmpleado');
Route::post('/empledos/crear', [EmpleadosController::class, 'store'])->name('formEmpleado');
Route::get('/empleados/detalle/{id}', [EmpleadosController::class, 'show'])->name('detallesEmpleado');
Route::delete('/empledos/eliminar/{id}', [EmpleadosController::class, 'destroy'])->name('eliminarEmpleado');

//Rutas PedidosDetalle
Route::get('/pedidoDetalle/productos', [pedidoDetalleController::class, 'indexProductos'])->name('selectProductos');
Route::get('/pedidoDetalle', [pedidoDetalleController::class, 'pedidoDetalles'])->name('detallesPedido');
Route::post('/pedidoDetalle', [pedidoDetalleController::class, 'store'])->name('formpedidodetalle');

//Rutas Pedidos
Route::get('/pedidos', [PedidosController::class, 'index'])->name('indexPedidos');
