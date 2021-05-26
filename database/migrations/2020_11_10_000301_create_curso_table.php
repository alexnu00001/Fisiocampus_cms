<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',506);
            $table->text('descripcion');
            $table->integer('orden');
            $table->decimal('numero_horas',10,2)->nullable();
            $table->decimal('numero_creditos',10,2)->nullable();
            $table->text('modelos_evaluacion')->nullable();
            $table->text('materiales_curso')->nullable();
            $table->unsignedBigInteger('modalidad_id');
            $table->foreign('modalidad_id')->references('id')->on('modalidades');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
