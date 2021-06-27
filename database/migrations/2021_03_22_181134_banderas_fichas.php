<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BanderasFichas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('banderas', function (Blueprint $table) {
        $table->increments('id');

        $table->string('name');
        $table->string('image');
        $table->timestamps();
      });
      Schema::create('bandera_ficha', function (Blueprint $table) {
        $table->increments('id');

        $table->integer('ficha_id')->unsigned();
        $table->foreign('ficha_id')->references('id')
              ->on('fichas')->onDelete('cascade');

        $table->integer('bandera_id')->unsigned();
        $table->foreign('bandera_id')->references('id')
              ->on('banderas')->onDelete('cascade');
        $table->integer('usage')->unsigned();
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
      Schema::dropIfExists('bandera_ficha');
      Schema::dropIfExists('banderas');
    }
}
