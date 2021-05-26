<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyTipoOda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oda', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_id')->change();
            $table->foreign('tipo_id')->references('id')->on('tipos_odas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
        Schema::table('oda', function (blueprint $table){
        $table->dropForeign(['tipo_id']);
        $table->dropColumn('tipo_id');
        });
    }
}
