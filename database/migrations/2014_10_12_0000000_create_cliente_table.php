<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->unsignedInteger('tipoDocumentoId');
            $table->foreign('tipoDocumentoId')->references('idTipoDocumento')->on('tipo_documento')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('identificacionCliente');
            $table->primary('identificacionCliente');
            $table->string('nombresCliente');
            $table->string('apellidosCliente');
            $table->string('telefonoCliente');
            $table->string('correoCliente');
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
        Schema::dropIfExists('cliente');
    }
}
