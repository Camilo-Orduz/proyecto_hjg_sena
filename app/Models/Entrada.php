<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    
    protected $table = 'entrada';
    protected $primaryKey = 'idEntrada';
    protected $fillable = [
        'cantidadProducto',
        'detallesEntrada',
        'productoId'

    ];

    //Relación con el modelo producto
    public function producto(){
        return $this->belongsTo(Producto::class,'productoId');
    }
}
