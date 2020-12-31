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
      			$table->longText('ficha');
      			$table->longText('sinopsis');
      			$table->longText('equipo');
      			$table->longText('descarga');
            $table->double('porcentaje_traduccion');
            $table->double('porcentaje_correccion');
            $table->double('porcentaje_edicion');
            $table->double('porcentaje_betatesting');
            $table->longtext('info_adicional');
            $table->string('url', 255);
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
