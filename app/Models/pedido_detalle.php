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

    //Relación con el modelo pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedidoId');
    }

    //Relación con el modelo producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'productoId');
    }
}
