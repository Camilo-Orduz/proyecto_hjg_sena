<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedInteger('tipoDocumentoId');
            $table->foreign('tipoDocumentoId')->references('idTipoDocumento')->on('tipo_documento')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('identificacionEmpleado')->unique();
            $table->primary('identificacionEmpleado');
            $table->string('nombresEmpleado');
            $table->string('apellidosEmpleado');
            $table->string('telefonoEmpleado');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
