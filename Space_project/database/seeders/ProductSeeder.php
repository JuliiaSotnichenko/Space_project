<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
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
    }
}
