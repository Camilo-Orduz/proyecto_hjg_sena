<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtapaProduccion extends Model
{
    use HasFactory;

    protected $table = 'etapa_de_produccion';
    protected $primaryKey = 'idEtapaDeProduccion';
    protected $fillable = [
        'nombreEtapaProduccion'
    ];
}
