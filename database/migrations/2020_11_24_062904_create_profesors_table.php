<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('persona_id');
            $table->text('resumen');
            $table->integer('escuela_id')->nullable();
            $table->integer('estudio_academico_id')->nullable();
            $table->text('sobre_mi')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('avatar')->nullable();
            $table->text('redes')->nullable();
            $table->string('uid_interno')->nullable();
            $table->string('job')->nullable();
            $table->string('especialidad')->nullable();
            $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::drop('profesors');
    }
}
