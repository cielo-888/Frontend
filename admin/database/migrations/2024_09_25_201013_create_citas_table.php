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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_medico');
            $table->unsignedBigInteger('id_paciente');
            $table->dateTime('Fecha');
            $table->string('Tipo',100);
            $table->timestamps();

            $table->foreign('id_medico')->references('id')->on('medicos')->onDelete('cascade');
            $table->foreign('id_paciente')->references('id')->on('pacientes')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
