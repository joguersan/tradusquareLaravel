<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoticiaFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('noticia_ficha', function (Blueprint $table) {
        $table->increments('id');

        $table->integer('noticia_id')->unsigned();
        $table->foreign('noticia_id')->references('id')
              ->on('noticias')->onDelete('cascade');

        $table->integer('ficha_id')->unsigned();
        $table->foreign('ficha_id')->references('id')
              ->on('fichas')->onDelete('cascade');

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
        Schema::dropIfExists('noticia_ficha');
    }
}
