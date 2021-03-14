<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('titulo')->unique();
            $table->string('imagen');
            $table->text('contenido');
            $table->integer('autor_id')->unsigned()->default(1);
            $table->foreign('autor_id')->references('id')
                  ->on('users')->onDelete('cascade');
            $table->boolean('estado')->default(1);
            $table->text('url');
            // Usuario
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
        Schema::dropIfExists('noticias');
    }
}
