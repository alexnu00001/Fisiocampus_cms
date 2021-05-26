<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteOfertasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('estudiante_id')->unsigned();
            $table->bigInteger('oferta_id')->unsigned();
            $table->integer('estatus_id')->unsigned();
            $table->integer('avance');
            $table->foreign('oferta_id')->references('id')->on('ofertas');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('estatus_id')->references('id')->on('estatuses');
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
        Schema::drop('estudiante_ofertas');
    }
}
