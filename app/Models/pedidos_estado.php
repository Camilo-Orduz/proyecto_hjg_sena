<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos_estado extends Model
{
    use HasFactory;

    protected $table = 'pedido_estado';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pedidoId',
        'estadoPedidoId'
    ];
}
