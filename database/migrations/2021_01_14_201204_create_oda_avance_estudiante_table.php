<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdaAvanceEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oda_avance_estudiante', function (Blueprint $table) {
            $table->id();
            $table->integer('curso_id');
            $table->integer('oda_id');
            $table->integer('user_id');
            $table->string('avance', 20);
            $table->string('avance_seg', 20);
            $table->string('total_seg', 20);
            $table->string('status_video', 0);
            $table->boolean('asistencia')->default(false);
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
        Schema::dropIfExists('oda_avance_estudiante');
    }
}
