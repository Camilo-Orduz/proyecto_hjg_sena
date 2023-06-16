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
        'estadoProducto'
    ];

    //Relación con el modelo entrada
    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
