<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscripcionControlInterno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cint_suscripcion', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('id_stripe')->nullable();
            $table->boolean('status')->nullable();
            $table->bigInteger('id_pais')->unsigned();
            $table->foreign('id_pais')->references('id')->on('paises'); 
            //$table->bigInteger('id_leng')->unsigned();      
            //$table->foreign('id_leng')->references('id')->on('lenguajes');
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
        Schema::dropIfExists('cint_suscripcion');
    }
}
