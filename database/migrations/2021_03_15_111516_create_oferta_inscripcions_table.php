<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertaInscripcionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta_inscripcions', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('oferta_id')->unsigned();
            $table->integer('inscripcion_tipo_id')->unsigned();
            $table->foreign('oferta_id')->references('id')->on('ofertas');
            $table->foreign('inscripcion_tipo_id')->references('id')->on('inscripcion_tipos');
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
        Schema::drop('oferta_inscripcions');
    }
}
