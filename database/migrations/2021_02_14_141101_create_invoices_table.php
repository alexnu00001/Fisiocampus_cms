<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');

            # Data obtained through the API response of PayPal
            $table->string('customer_email')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('country_code')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_status')->nullable();
            $table->double('price', 2);
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
        Schema::dropIfExists('invoices');
    }
}
