<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('train_code');
            $table->date('train_date');
            $table->integer('clean');
            $table->integer('soil');
            $table->integer('stain');
            $table->integer('torn');
            $table->string('train_status');
            $table->string('delivery_status');
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
        Schema::dropIfExists('hotel_transactions');
    }
}
