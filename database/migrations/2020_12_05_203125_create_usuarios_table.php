<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('run');
            $table->string('nombre');
            $table->string('nombre2');
            $table->string('apellido');
            $table->string('apellido2');
            $table->string('genero');
            $table->string('pais');
            $table->string('fechaNac');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('usuarios');
    }
}
