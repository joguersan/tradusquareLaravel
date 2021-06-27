<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTablonFicha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('entrada_tablons', function (Blueprint $table) {
        $table->integer('ficha_id')->unsigned()->nullabe();
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
      Schema::table('entrada_tablons', function (Blueprint $table) {
        $table->dropcolumn('ficha_id');
      });
    }
}
