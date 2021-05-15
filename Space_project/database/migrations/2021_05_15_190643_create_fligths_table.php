<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFligthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fligths', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('depart_time');
            $table->string('arrival_time');
            $table->unsignedBigInteger('itinerary_id');
            $table->unsignedBigInteger('location_id');
            $table->foreign('itinerary_id')->references('id')->on('itineraries');
            $table->foreign('location_id')->references('id')->on('locations');
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
        Schema::dropIfExists('fligths');
    }
}
