<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongresosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congresos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('subtitulo')->nullable();
            $table->string('logo')->nullable();
            $table->string('imagen_cabecera_fondo')->nullable();
            $table->integer('categoria_congreso_id')->nullable();
            $table->string('video_streaming')->nullable();
            $table->text('descripcion_temario')->nullable();
            $table->text('programa')->nullable();
            $table->integer('direccion_id')->nullable();
            $table->timestamp('fecha_inicial')->nullable();
            $table->timestamp('fecha_final')->nullable();
            $table->boolean('is_fecha_final')->nullable();
            $table->timestamp('fecha_limite_inscripcion')->nullable();
            $table->integer('numero_plazas')->nullable();
            $table->string('duracion')->nullable();
            $table->unsignedInteger('tipo_congreso_id');
            $table->foreign('tipo_congreso_id')->references('id')->on('tipo_congresos');
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
        Schema::drop('congresos');
    }
}
