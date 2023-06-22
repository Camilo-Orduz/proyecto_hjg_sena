<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('idPedido');
            //$table->unsignedBigInteger('clienteIdentificacion');
            //$table->foreign('clienteIdentificacion')->references('identificacionCliente')->on('cliente')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('empleadoIdentificacion')->nullable();
            $table->foreign('empleadoIdentificacion')->references('identificacionEmpleado')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('fechaRadicacionPedido')->nullable();
            //$table->dateTime('fechaEntregaEstimada');
            $table->double('totalPedido', 10, 2)->nullable();
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
        Schema::dropIfExists('pedido');
    }
}
