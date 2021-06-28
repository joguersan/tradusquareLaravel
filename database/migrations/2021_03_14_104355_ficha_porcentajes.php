<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FichaPorcentajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('ficha_porcentajes', function (Blueprint $table) {
           $table->increments('id')->unsigned()->unique();
           $table->integer('ficha_id')->unsigned();
           $table->foreign('ficha_id')->references('id')
                 ->on('fichas')->onDelete('cascade');
           $table->string('titulo_porcentaje', 255);
           $table->integer('valor_porcentaje')->unsigned();

         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('ficha_porcentajes');
     }
}
