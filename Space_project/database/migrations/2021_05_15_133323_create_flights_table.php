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
        Schema::create('flights', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->date('depart_date');
            $table->time('depart_time');
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->enum('status', ['Done', 'Not Done']);
            $table->enum('itinerary', ['Earth', 'Moon', 'Mars']);
            $table->enum('location', ['Baikonur Cosmodrome ', 'NASA Kennedy Space Center', 'Boca Chica Starbase']);
            $table->string('fly_ref');
            $table->string('file');
            $table->string('description');
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
