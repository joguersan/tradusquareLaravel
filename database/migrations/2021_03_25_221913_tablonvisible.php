<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tablonvisible extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('entrada_tablons', function (Blueprint $table) {
        $table->boolean('visible')->default('0');
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
        $table->dropcolumn('visible');
      });
    }
}
