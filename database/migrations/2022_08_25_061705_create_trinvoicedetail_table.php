<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrinvoicedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trinvoicedetail', function (Blueprint $table) {
            $table->string('InvoiceNo', 10);
            $table->integer('ProductID');
            $table->float('Weight');
            $table->smallInteger('Qty');
            $table->decimal('Price', 10, 0);
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
        Schema::dropIfExists('trinvoicedetail');
    }
}
