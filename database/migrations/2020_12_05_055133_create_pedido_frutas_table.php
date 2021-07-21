<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoFrutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_frutas', function (Blueprint $table) {
            $table->bigIncrements('id_pedido_fruta');
            $table->unsignedBigInteger('fruta_id'); // Relación con frutas
            $table->foreign('fruta_id')->references('id_fruta')->on('frutas'); // clave foranea
            $table->unsignedBigInteger('pedido_id'); // Relación con pedidos
            $table->foreign('pedido_id')->references('id_pedido')->on('pedidos'); 
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_frutas');
    }
}
