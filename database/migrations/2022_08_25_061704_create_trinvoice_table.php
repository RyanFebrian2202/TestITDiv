<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrinvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trinvoice', function (Blueprint $table) {
            $table->string('InvoiceNo', 10)->primary();
            $table->dateTime('InvoiceDate');
            $table->string('InvoiceTo', 500);
            $table->string('ShipTo', 500);
            $table->integer('SalesID');
            $table->integer('CourierID');
            $table->integer('PaymentType');
            $table->decimal('CourierFee', 10, 0);
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
        Schema::dropIfExists('trinvoice');
    }
}
