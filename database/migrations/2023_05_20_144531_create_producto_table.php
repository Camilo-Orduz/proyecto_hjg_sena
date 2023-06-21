<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('idProducto');
            $table->string('nombreProducto');
            $table->mediumText('descripcionProducto');
            $table->char('tallaProducto', 10);
            $table->string('categoriaProducto');
            $table->integer('stockProducto');
            $table->double('precioProducto', 10, 2);
            $table->string('imagenProducto');
            
            
            $table->timestamps();


            Schema::table('producto', function (Blueprint $table) {
                $table->dropColumn('estadoProducto');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
