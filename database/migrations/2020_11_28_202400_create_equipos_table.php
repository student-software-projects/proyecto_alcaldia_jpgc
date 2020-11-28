<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_equipo','45');
            $table->string('logo');
            $table->bigInteger('localidades_id')->unsigned();
            $table->foreign('localidades_id')->references('id')->on('localidades');
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
