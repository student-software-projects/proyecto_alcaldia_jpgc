<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalidadesTable extends Migration
{
    public function up()
    {
        Schema::create('localidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('localidad','45');
        });
    }
    public function down()
    {
        Schema::dropIfExists('localidades');
    }
}
