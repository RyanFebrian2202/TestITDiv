<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLtcourierfeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ltcourierfee', function (Blueprint $table) {
            $table->integer('WeightID');
            $table->integer('CourierID');
            $table->integer('StartKg');
            $table->integer('EndKg')->nullable();
            $table->decimal('Price', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ltcourierfee');
    }
}
