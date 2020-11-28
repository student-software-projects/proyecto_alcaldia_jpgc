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
            $table->timestamps();
            $table->string('name','50');
            $table->string('password','15');
            $table->string('email','15')->unique();
            $table->bigInteger('localidades_id')->unsigned();
            $table->foreign('localidades_id')->references('id')->on('localidades');
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
