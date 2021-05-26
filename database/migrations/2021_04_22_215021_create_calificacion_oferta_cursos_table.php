<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionOfertaCursosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_oferta_cursos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('oferta_id')->nullable();
            $table->foreign('oferta_id')->references('id')->on('ofertas');

            $table->unsignedBigInteger('curso_id')->nullable();
            $table->foreign('curso_id')->references('id')->on('cursos');

          $table->unsignedBigInteger('secuencia_aprendizaje_id')->nullable();
          $table->foreign('secuencia_aprendizaje_id')->references('id')->on('secuencias_aprendizaje');

          $table->unsignedBigInteger('examen_id')->nullable();
          $table->foreign('examen_id')->references('id')->on('examen');

            $table->unsignedBigInteger('oda_id')->nullable();
            $table->foreign('oda_id')->references('id')->on('oda');

            $table->unsignedInteger('tipo_calificacion_id')->nullable();
            $table->foreign('tipo_calificacion_id')->references('id')->on('tipo_calificacions');

            $table->integer('porcentaje');
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
        Schema::drop('calificacion_oferta_cursos');
    }
}
