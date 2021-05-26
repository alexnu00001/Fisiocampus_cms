<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertaCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('oferta_categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categorias')->unsigned();
            $table->bigInteger('id_oferta')->unsigned();
            $table->foreign('id_categorias')->references('id')->on('categorias');
            $table->foreign('id_oferta')->references('id')->on('ofertas');
            $table->timestamps();
            $table->softDeletes();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('oferta_categoria');
    }
}
