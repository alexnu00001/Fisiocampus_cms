<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableForeignSuborders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('suborders', function (Blueprint $table) {

        $table->unsignedInteger('order_id')->change();

        $table->foreign('order_id')->references('id')->on('orders');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('suborders', function (blueprint $table){


          $table->dropForeign(['order_id']);
          $table->dropColumn('order_id');

              });
    }
}
