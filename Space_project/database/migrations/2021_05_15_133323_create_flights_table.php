<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //! Do not overwrite!!

        Schema::create('flights', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('depart_date');
            $table->string('depart_time');
            $table->string('arrival_date');
            $table->string('arrival_time');
            $table->enum('status', ['Done', 'Not Done']);
            $table->enum('itinerary', ['Orbital Hotel', 'Space Station V', 'Floshton Paradise']);
            $table->enum('location', ['Baikonur Cosmodrome', 'NASA Kennedy Space Center', 'Boca Chica Starbase', 'Guiana Space Center Kourou']);
            $table->string('fly_ref');
            $table->enum('price', ['799000', '1249000', '5899000']);
            $table->string('file');
            $table->longText('description');
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
        Schema::dropIfExists('flights');
    }
}
