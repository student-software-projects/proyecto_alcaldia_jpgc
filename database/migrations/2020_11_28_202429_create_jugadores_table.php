<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombres','45');
            $table->string('apellidos','45');
            $table->string('numero_camisa','2')->unique();
            $table->string('apodo','45');
            $table->bigInteger('equipos_id')->unsigned();
            $table->foreign('equipos_id')->references('id')->on('equipos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
}
