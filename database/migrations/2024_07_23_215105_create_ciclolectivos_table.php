<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiclolectivosTable extends Migration
{
    public function up()
    {
        Schema::create('ciclolectivos', function (Blueprint $table) {
            $table->id();
            $table->integer('anio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ciclolectivos');
    }
}
