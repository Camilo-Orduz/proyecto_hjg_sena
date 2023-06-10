<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro_de_actividad extends Model
{
    use HasFactory;

    protected $table = 'registro_de_actividad';
    protected $primaryKey = 'idRegistroDeActividad';
    protected $fillable = [
        'descripcion',
        'pedidoId',
        'empleadoId ',
        'estadoPedidoId',
        'etapaProduccionId'
    ];
}
