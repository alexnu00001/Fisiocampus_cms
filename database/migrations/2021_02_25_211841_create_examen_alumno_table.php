<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_alumno', function (Blueprint $table) {
            $table->id();
            $table->integer('id_alumno')->unsigned();
            $table->integer('id_examen')->unsigned();
            $table->time('tiempo')->nullable();
            $table->integer('calificacion')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('examen_alumno');
    }
}
