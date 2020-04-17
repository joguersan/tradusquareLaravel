<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('nombre');
            $table->string('imagen');
            // Grupo
      			$table->string('ficha');
      			$table->string('sinopsis', 3000);
      			$table->string('equipo', 3000);
      			$table->string('descarga');
            $table->double('porcentaje_traduccion');
            $table->double('porcentaje_correccion');
            $table->double('porcentaje_edicion');
            $table->double('porcentaje_betatesting');
            $table->string('estado');
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
        Schema::dropIfExists('fichas');
    }
}
