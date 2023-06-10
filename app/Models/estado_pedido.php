<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado_pedido extends Model
{
    use HasFactory;

    protected $table = 'estado_pedido';
    protected $primaryKey = '	idEstadoPedido';
    protected $fillable = [
        'nombreEstadoPedido'
    ];
}
