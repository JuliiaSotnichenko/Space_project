<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->enum('launch_location', ['Baikonur Cosmodrome', 'Kennedy Space Center', 'Guiana Space Center', 'Vikram Sarabhai Space Center', 'Tanegashima Space Center', 'Vostochny Cosmodrome', 'Boca Chica Starbase', 'Vandenberg Air Base']);

            $table->enum('landing_location', ['Atlantic Ocean', 'Kazakh Steppe', 'Shuttle Landing Facility', 'Boca Chica Starbase', 'Pacific Ocean', 'Kourou Airport', 'Indian Ocean']);

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
        Schema::dropIfExists('locations');
    }
}
