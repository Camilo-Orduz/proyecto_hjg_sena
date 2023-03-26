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
        Schema::create('pedidos_logs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_log', 125);
            $table->longText('descripcion_log', 125);
            $table->float('ip');
            $table->bigInteger('empleado_id');
            $table->foreign('empleado_id')->references('numero_identificacion')->on('empleados')->onDelete('cascade');
            $table->unsignedInteger('pedido_id');
            $table->foreign('pedido_id')->references('id_pedido')->on('pedidos')->onDelete('cascade');
            $table->unsignedInteger('pedido_estado_pedido_id');
            $table->foreign('pedido_estado_pedido_id')->references('estado_pedido_id')->on('pedidos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_logs');
    }
};
