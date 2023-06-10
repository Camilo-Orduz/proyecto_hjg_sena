<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos_etapas extends Model
{
    use HasFactory;

    protected $table = 'pedidos_etapas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pedidoId',
        'EtapaProduccionId '
    ];
}
