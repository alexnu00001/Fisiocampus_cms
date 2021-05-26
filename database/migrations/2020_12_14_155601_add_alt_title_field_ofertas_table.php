<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAltTitleFieldOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ofertas', function (Blueprint $table) {
            $table->text('alt_banner')->after('is_public')->nullable();
            $table->text('title_banner')->after('alt_banner')->nullable();
            $table->text('alt_img_princ')->after('title_banner')->nullable();
            $table->text('title_img_princ')->after('alt_img_princ')->nullable();
            $table->text('alt_img_sec')->after('title_img_princ')->nullable();
            $table->text('title_img_sec')->after('alt_img_sec')->nullable();
            $table->text('alt_icono')->after('title_img_sec')->nullable();
            $table->text('title_icono')->after('alt_icono')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ofertas', function (Blueprint $table) {
            $table->dropColumn('alt_banner', 'title_banner','alt_img_princ', 'title_img_princ','alt_img_sec','title_img_sec','alt_icono','title_icono');
        });
    }
}
