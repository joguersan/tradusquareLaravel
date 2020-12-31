<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FichaGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ficha_grupo', function (Blueprint $table) {
        $table->increments('id');

        $table->integer('ficha_id')->unsigned();
        $table->foreign('ficha_id')->references('id')
              ->on('fichas')->onDelete('cascade');

        $table->integer('grupo_id')->unsigned();
        $table->foreign('grupo_id')->references('id')
              ->on('grupos')->onDelete('cascade');

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
        Schema::dropIfExists('ficha_grupo');
    }
}
