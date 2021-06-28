<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {
          $table->timestamp('deleted_at')->after('updated_at')->nullable();
        });
        Schema::table('grupos', function (Blueprint $table) {
          $table->timestamp('deleted_at')->after('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
          $table->dropcolumn('deleted_at');
        });
        Schema::table('grupos', function (Blueprint $table) {
          $table->dropcolumn('deleted_at');
        });
    }
}
