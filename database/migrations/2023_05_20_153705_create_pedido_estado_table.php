<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_estado', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('pedidoId');
            $table->foreign('pedidoId')->references('idPedido')->on('pedido')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('estadoPedidoId');
            $table->foreign('estadoPedidoId')->references('idEstadoPedido')->on('estado_pedido')->onUpdate('cascade')->onDelete('cascade');

            
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
        Schema::dropIfExists('pedido_estado');
    }
}
