<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_respuestas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_examen_alumno')->unsigned();
            $table->integer('id_pregunta')->unsigned();
            $table->string('respuesta_alumno')->nullable();
            $table->boolean('is_correcta')->nullable();
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
        Schema::dropIfExists('alumno_respuestas');
    }
}
