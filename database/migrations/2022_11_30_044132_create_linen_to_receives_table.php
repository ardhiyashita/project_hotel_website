<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinenToReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linen_to_receives', function (Blueprint $table) {
            $table->id();
            $table->string('parking_code');
            $table->date('parking_date');
            $table->string('packed_by');
            $table->string('hotel_code');
            $table->string('hotel_name');
            $table->integer('total');
            $table->string('status');
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
        Schema::dropIfExists('linen_to_receives');
    }
}
