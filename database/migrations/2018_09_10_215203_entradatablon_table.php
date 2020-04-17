<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntradatablonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_tablons', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('titulo');
            $table->string('imagen');
            $table->text('contenido');
            $table->string('contacto');
            // Grupo
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
        Schema::dropIfExists('entrada_tablons');
    }
}
