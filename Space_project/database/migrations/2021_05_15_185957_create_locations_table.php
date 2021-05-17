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
            $table->enum('lauch_location', ['Baikonur_Cosmodrome', 'Kennedy_Space_Center', 'Guiana_Space_Center', 'Vikram_Sarabhai_Space_Center', 'Tanegashima Space Center', 'Vostochny Cosmodrome', 'Boca Chica Starbase', 'Vandenberg Air Base']);
            $table->string('time_lauch_location');
            $table->enum('landing_location', ['Atlantic Ocean', 'Kazakh Steppe', 'Shuttle Landing Facility', 'Boca Chica Starbase', 'Pacific Ocean', 'Kourou Airport', 'Indian Ocean']);
            $table->string('time_landing_location');
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
