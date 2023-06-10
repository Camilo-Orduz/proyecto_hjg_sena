<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroDeActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_de_actividad', function (Blueprint $table) {
            $table->increments('idRegistroDeActividad');
            $table->longText('descripcion');

            $table->unsignedInteger('pedidoId');
            $table->foreign('pedidoId')->references('idPedido')->on('pedido')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('empleadoId');
            $table->foreign('empleadoId')->references('identificacionEmpleado')->on('users')->onUpdate('cascade')->onDelete('cascade');

            
            $table->unsignedInteger('estadoPedidoId');
            $table->foreign('estadoPedidoId')->references('idEstadoPedido')->on('estado_pedido')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('etapaProduccionId');
            $table->foreign('etapaProduccionId')->references('idEtapaDeProduccion')->on('etapa_de_produccion')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('registro_de_actividad');
    }
}
