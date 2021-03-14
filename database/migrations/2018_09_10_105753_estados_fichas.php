<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstadosFichas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('estado_ficha', function (Blueprint $table) {
           $table->increments('id')->unsigned()->unique();
           $table->integer('estado_id')->unsigned();
           $table->foreign('estado_id')->references('id')
                 ->on('estados')->onDelete('cascade');
           $table->integer('ficha_id')->unsigned();
           $table->foreign('ficha_id')->references('id')
                  ->on('fichas')->onDelete('cascade');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('plataformas');
     }
}
