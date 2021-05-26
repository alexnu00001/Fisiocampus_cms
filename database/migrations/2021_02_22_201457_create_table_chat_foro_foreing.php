<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChatForoForeing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('chat_foro', function (Blueprint $table) {
        $table->unsignedBigInteger('oda_id')->change();
        $table->unsignedBigInteger('user_id')->change();
        $table->foreign('oda_id')->references('id')->on('oda');
        $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('chat_foro', function (blueprint $table){
        $table->dropForeign(['oda_id']);
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
        $table->dropColumn('oda_id');

          });
    }
}
