<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_actividad', function (Blueprint $table) {
            $table->id();
            $table->integer('id_actividad')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->integer('calificacion')->nullable();
            $table->string('rubrica')->nullable();
            $table->string('comentario')->nullable();
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
        Schema::dropIfExists('estudiante_actividad');
    }
}
