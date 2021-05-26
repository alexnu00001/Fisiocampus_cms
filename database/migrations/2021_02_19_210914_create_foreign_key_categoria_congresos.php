<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyCategoriaCongresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('congresos', function (Blueprint $table) {
             $table->unsignedInteger('categoria_congreso_id')->change();
             $table->foreign('categoria_congreso_id')->references('id')->on('categoria_congresos');

         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('congresos', function (blueprint $table){
      $table->dropForeign(['categoria_congreso_id']);
      $table->dropColumn('categoria_congreso_id');
        });
    }
}
