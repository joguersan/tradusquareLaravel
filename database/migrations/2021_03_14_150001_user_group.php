<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('grupo_user', function (Blueprint $table) {
        $table->increments('id');

        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')
              ->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('grupo_user');
    }
}
