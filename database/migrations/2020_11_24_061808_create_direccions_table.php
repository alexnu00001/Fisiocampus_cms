<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linea_1');
            $table->string('linea_2')->nullable();
            $table->unsignedBigInteger('pais_id');
            $table->string('codigo_postal')->nullable();
            $table->string('provincia');
            $table->string('ciudad')->nullable();
            $table->string('referencia')->nullable();
            $table->string('alias')->nullable();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direccions');
    }
}
