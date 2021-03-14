<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FichaPlataformaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_plataforma', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('ficha_id')->unsigned();
          $table->foreign('ficha_id')->references('id')
                ->on('fichas')->onDelete('cascade');

          $table->integer('plataforma_id')->unsigned();
          $table->foreign('plataforma_id')->references('id')
                ->on('plataformas')->onDelete('cascade');
          $table->integer('estado_id')->unsigned();
          $table->foreign('estado_id')->references('id')
                ->on('estados')->onDelete('cascade');

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
        Schema::dropIfExists('ficha_plataforma');
    }
}
