<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdaSecuenciaAprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oda_secuencia_aprendizaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('oda_id')->unsigned();
            $table->foreign('oda_id')->references('id')->on('oda');
            $table->unsignedBigInteger('secuencia_aprendizaje_id')->unsigned();
            $table->foreign('secuencia_aprendizaje_id')->references('id')->on('secuencias_aprendizaje');
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
        Schema::dropIfExists('oda_secuencia_aprendizaje');
    }
}
