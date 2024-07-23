<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ciclolectivos_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('curso_id'); // Reemplaza 'nivel' con 'curso_id'
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('genero');
            $table->string('dni');
            $table->string('cuil');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('nacionalidad');
            $table->string('domicilio');
            $table->string('piso_torre_depto')->nullable();
            $table->string('localidad');
            $table->string('provincia');
            $table->string('codigo_postal');
            $table->string('telefono');
            $table->string('nombre_establecimiento_anterior')->nullable();
            $table->string('nivel_anterior')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('ciclolectivos_id')->references('id')->on('ciclolectivos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade'); // Relaciona con 'cursos'
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
