<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->increments('idEntrada');
            $table->string('nombreProducto');
            $table->integer('cantidadProducto');
            $table->mediuMText('detallesEntrada');
            $table->unsignedInteger('productoId');
            $table->foreign('productoId')->references('idProducto')->on('producto')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada');
    }
}
