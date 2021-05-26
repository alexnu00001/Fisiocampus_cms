<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldAlumnoOdaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('alumno_oda', function (Blueprint $table) {
            $table->tinyInteger('calificacion')->after('oda_id')->nullable()->unsigned();
            $table->string('rubrica')->after('calificacion')->nullable();

        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('alumno_oda', function (Blueprint $table) {
            $table->dropColumn('calificacion');
            $table->dropColumn('rubrica');
        });*/
    }
}
