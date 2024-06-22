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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('genero');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento'); 
            $table->string('nacionalidad');
            $table->string('domicilio');
            $table->string('depto_torre_piso')->nullable();
            $table->string('localidad');
            $table->string('codigo_postal');
            $table->string('dni');
            $table->string('cuil');
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
        Schema::dropIfExists('estudiantes');
    }
};
