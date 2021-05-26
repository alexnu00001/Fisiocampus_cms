<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeinOdaAvanceEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oda_avance_estudiante', function (Blueprint $table) {

          $table->unsignedBigInteger('curso_id')->change();
          $table->unsignedBigInteger('oda_id')->change();
          $table->unsignedBigInteger('user_id')->change();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('oda_id')->references('id')->on('oda');
            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oda_avance_estudiante', function (blueprint $table){

          $table->dropForeign(['curso_id']);
          $table->dropColumn('curso_id');
          $table->dropForeign(['oda_id']);
          $table->dropColumn('oda_id');
          $table->dropForeign(['user_id']);
          $table->dropColumn('user_id');

        });
        }

    }
