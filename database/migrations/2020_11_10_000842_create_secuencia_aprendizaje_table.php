<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuenciaAprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secuencias_aprendizaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',506);
            $table->string('titulo',506);
            $table->boolean('is_seriado');
            $table->bigInteger('curso_id')->unsigned();
            $table->integer('orden');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secuencias_aprendizaje');
    }
}
