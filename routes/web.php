<?php

use App\Http\Controllers\ProductosController;
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
    Route::get('/inicio-pedidos', function () {
        return view('pedidos');
    })->name('inicio-pedidos');
    Route::get('registro-pedido', function () {
        return view('registro_pedido');
    })->name('registro-pedido');
})->group(function () {
    Route::get('entradas', function () {
        return view('entradaProductos.registroEntrada');
    })->name('entradas');
})->group(function () {
    Route::get('productos-form', function () {
        return view('productos.registrarProducto');
    })->name('productos-form');
})->group(function () {
    Route::get('producto-salida', function () {
        return view('salida');
    })->name('producto-salida');
});

//Rutas Producto
Route::get('/productos', [ProductosController::class, 'index'])->name('indexProductos');
Route::get('/productos/crear', [ProductosController::class, 'create']);
Route::post('/productos', [ProductosController::class, 'store'])->name('crearProducto');
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('eliminarProducto');
Route::get('/productos/{id}/editar', [ProductosController::class, 'edit']);
Route::post('/productos/{id}/editar/update', [ProductosController::class, 'update'])->name('actualizarProducto');

