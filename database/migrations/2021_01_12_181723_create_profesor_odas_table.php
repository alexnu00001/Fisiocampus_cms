<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorOdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('profesor_odas', function (Blueprint $table) {
            $table->id();
            $table->integer('profesor_id');
            $table->integer('curso_id');
            $table->integer('id_oda_alumno');
            $table->integer('calificacion');
            $table->string('rubrica');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::dropIfExists('profesor_odas');*/
    }
}
