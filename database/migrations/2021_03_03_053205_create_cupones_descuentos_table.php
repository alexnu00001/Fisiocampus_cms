<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponesDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupones_descuentos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->boolean('tipo_descuento');// (False)Descuento y (true)Cantidad
            $table->date('vigencia_inicio');
            $table->date('vigencia_final');
            $table->string('valor_descuento'); // En porcentaje ó cantidad 
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
        Schema::dropIfExists('cupones_descuentos');
    }
}
