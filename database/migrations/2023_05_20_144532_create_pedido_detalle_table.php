<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_detalle', function (Blueprint $table) {
            $table->increments('idPedidoDetalle');
            $table->unsignedInteger('pedidoId');
            $table->foreign('pedidoId')->references('idPedido')->on('pedido')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('productoId');
            $table->foreign('productoId')->references('idProducto')->on('producto')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cantidadProducto');
            $table->double('subTotal', 10, 2);
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
        Schema::dropIfExists('pedido_detalle');
    }
}
