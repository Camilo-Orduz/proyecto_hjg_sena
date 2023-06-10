<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido_detalle extends Model
{
    use HasFactory;

    protected $table = 'pedido_detalle';
    protected $primaryKey = 'idPedidoDetalle';
    protected $fillable = [
        'pedidoId',
        'productoId',
        'cantidadProducto',
        'subTotal',
    ];
}
