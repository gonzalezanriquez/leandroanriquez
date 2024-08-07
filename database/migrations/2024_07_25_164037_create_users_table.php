<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->rememberToken()->nullable();
            $table->string('avatar')->nullable();
            $table->unsignedBigInteger('rol_id')->nullable();
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('ciclolectivos_id')->nullable();
            $table->unsignedBigInteger('familiar_id')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('set null');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('set null');
            $table->foreign('ciclolectivos_id')->references('id')->on('ciclolectivos')->onDelete('set null');
            $table->foreign('familiar_id')->references('id')->on('familiars')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
