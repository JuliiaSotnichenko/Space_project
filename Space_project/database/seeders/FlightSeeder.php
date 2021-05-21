<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //! Do not overwrite!

        DB::table('flights')->insert([
            "depart_date" => "12/04/2023",
            "depart_time" => "12:00",
            "arrival_date" => "02/05/2023",
            "arrival_time" => "16:00",
            "status" => "Not Done",
            "itinerary" => "Orbital Hotel",
            "location" => "Baikonur Cosmodrome",
            "fly_ref" => "A0000001",
            "price" => '799000', //? price in Euro
            "file" => "",
            "description" => "Stay in our orbital hotel for 3 weeks of luxurious relaxation in microgravity",

        ]);
        DB::table('flights')->insert([
            "depart_date" => "18/06/2023",
            "depart_time" => "12:00",
            "arrival_date" => "05/08/2023",
            "arrival_time" => "16:00",
            "status" => "Not Done",
            "itinerary" => "Space Station V",
            "location" => "Kennedy Space Center",
            "fly_ref" => "B0000001",
            "price" => '1249000', //? price in Euro
            "file" => "",
            "description" => "Fly around the moon and get a full view of our beautiful Earth",

        ]);
        DB::table('flights')->insert([
            "depart_date" => "28/07/2023",
            "depart_time" => "12:00",
            "arrival_date" => "14/03/2023",
            "arrival_time" => "16:00",
            "status" => "Not Done",
            "itinerary" => "Floshton Paradise",
            "location" => "Guiana Space Center Kourou",
            "fly_ref" => "C0000001",
            "price" => '5899000', //? price in Euro
            "file" => "",
            "description" => "Feel like a space pioneer with a full month stay in the Mars colony",

        ]);
    }
}
