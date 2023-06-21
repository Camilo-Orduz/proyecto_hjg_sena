<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $primaryKey = 'idProducto';
    protected $fillable = [
        'nombreProducto',
        'descripcionProducto',
        'tallaProducto',
        'categoriaProducto',
        'stockProducto',
        'precioProducto',
        'estadoProducto',
        'imagenProducto'
    ];

    //Relación con el modelo entrada
    public function entradas(){
        return $this->hasMany(Entrada::class);
    }

    //Relación con el modelo pedido_detalle
    public function pedido_detalle()
    {
        return $this->hasMany(pedido_detalle::class);
    }


    //Método funcionalidad del atributo de Status
    public function getStatusAttribute()
    {
        if ($this->stockProducto > 0) {
            return 'Disponible';
        } elseif ($this->stockProducto == 0) {
            return 'Sin stock';
        } else {
            return 'No disponible';
        }
    }
}
