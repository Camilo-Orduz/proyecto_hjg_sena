<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id_pedido');
            $table->timestamp('fecha_de_creacion');
            $table->date('fecha_entrega_estimada');
            $table->bigInteger('empleado_id');
            $table->foreign('empleado_id')->references('numero_identificacion')->on('empleados')->onDelete('cascade');
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id')->references('id_cliente')->on('cliente')->onDelete('cascade');
            $table->float('total_pedido');
            $table->unsignedInteger('estado_pedido_id');
            $table->foreign('estado_pedido_id')->references('id_estado_pedido')->on('estado_pedido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
