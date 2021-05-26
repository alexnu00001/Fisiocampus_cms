<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOauthForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('oauth_clients', function (blueprint $table){

             $table->unsignedBigInteger('user_id')->change();
             $table->foreign('user_id')
                 ->references('id')
                 ->on('users')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');


         });


    }
      public function down()
      {
  Schema::table('oauth_clients', function (Blueprint $table) {
                 $table->dropForeign(['user_id']);
                 $table->dropColumn(['user_id']);


         });
    }
}
