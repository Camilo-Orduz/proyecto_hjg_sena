<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosEtapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_etapas', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('pedidoId');
            $table->foreign('pedidoId')->references('idPedido')->on('pedido')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('EtapaProduccionId');
            $table->foreign('EtapaProduccionId')->references('idEtapaDeProduccion')->on('etapa_de_produccion')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('_pedidos_etapas');
    }
}
