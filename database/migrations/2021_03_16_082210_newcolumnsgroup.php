<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class newcolumnsgroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('grupos', function (Blueprint $table) {
        $table->text('descripcion')->nullable();
        $table->string('logo', 255)->nullable();
        $table->string('correo', 255)->nullable();
        $table->string('twitter', 255)->nullable();
        $table->string('facebook', 255)->nullable();
        $table->string('youtube', 255)->nullable();
        $table->string('discord', 255)->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('grupos', function (Blueprint $table) {
        $table->dropcolumn('descripcion');
        $table->dropcolumn('logo');
        $table->dropcolumn('correo');
        $table->dropcolumn('twitter');
        $table->dropcolumn('facebook');
        $table->dropcolumn('youtube');
        $table->dropcolumn('discord');
      });
    }
}
