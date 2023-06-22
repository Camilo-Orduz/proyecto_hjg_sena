<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $primaryKey = 'idPedido';
    protected $fillable = [
        //'clienteIdentificacion',
        'empleadoIdentificacion',
        'fechaRadicacionPedido',
        //'fechaEntregaEstimada',
        'totalPedido'
    ];

    //Relación con el modelo pedidoDetalle
    public function pedido_detalle()
    {
        return $this->hasMany(pedido_detalle::class);
    }
}
