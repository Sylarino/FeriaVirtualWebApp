<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usertype')->nullable;
            $table->string('run');
            $table->string('name');
            $table->string('secondname');
            $table->string('lastname');
            $table->string('lastname2');
            $table->string('gender');
            $table->string('country');
            $table->string('birthday');
            $table->string('telephone');
            $table->string('address');
            // $table->string('codigo')->unique();
            // $table->enum('fullacces', ['yes', 'no'])->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
