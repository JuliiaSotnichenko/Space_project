<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class itinerariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itineraries')->insert([
            [
                'name' => 'itinerary 1',
                'description' => 'Travel around planet Earth',
                'duration' => '21 days',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itinerary 2',
                'description' => 'To the Moon and back',
                'duration' => '1 month',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itinerary 3',
                'description' => '3 weeks on the moon',
                'duration' => '2 months',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itinerary 4',
                'description' => 'Mars Express',
                'duration' => '4 months',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itinerary 5',
                'description' => '3 Months on Mars',
                'duration' => '8 months',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],

        ]);
    }
}
