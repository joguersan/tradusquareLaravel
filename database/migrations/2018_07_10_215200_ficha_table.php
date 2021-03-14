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
            $table->string('nombre')->unique();
            $table->string('imagen');
            // Grupo
      			$table->text('ficha');
      			$table->text('sinopsis')->nullable();
      			$table->text('equipo')->nullable();
      			$table->text('descarga')->nullable();
            $table->text('info_adicional')->nullable();
            $table->string('url', 255)->unique();
            $table->boolean('estado')->default(0);
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
