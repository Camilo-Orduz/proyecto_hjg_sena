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
        Schema::create('empleados', function (Blueprint $table) {
            $table->biginteger('numero_identificacion')->primary();
            $table->unsignedInteger('tipo_doc_id');
            $table->foreign('tipo_doc_id')->references('id_tipo_doc')->on('tipo_documento')->onDelete('cascade');
            $table->string('nombres_empleado', 125);
            $table->string('apellidos_empleado', 125);
            $table->bigInteger('telefono_empleado');
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
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
