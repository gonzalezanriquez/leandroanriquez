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
            $table->unsignedBigInteger('ciclolectivos_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('nombres')->nullable();
            $table->string('genero')->nullable();
            $table->string('dni')->nullable();
            $table->string('cuil')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('piso_torre_depto')->nullable();
            $table->string('localidad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('telefono')->nullable();
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
