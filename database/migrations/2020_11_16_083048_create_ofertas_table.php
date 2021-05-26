<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('costo',15,2);
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('moneda_id');
            $table->unsignedBigInteger('oferta_tipo_id');
            $table->boolean('is_activo')->default(false);
            $table->boolean('is_public')->default(false);
            $table->boolean('is_compra_individual')->default(false);
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('moneda_id')->references('id')->on('monedas');
            $table->foreign('oferta_tipo_id')->references('id')->on('tipos_oferta');
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
        Schema::drop('ofertas');
    }
}
