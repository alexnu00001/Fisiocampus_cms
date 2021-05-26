<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenPreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_pregunta', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta');
            $table->boolean('is_abierta');     
            $table->string('respuesta')->nullable();
            $table->integer('correcta')->nullable();
            $table->integer('id_examen');
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
        Schema::dropIfExists('examen_pregunta');
    }
}
