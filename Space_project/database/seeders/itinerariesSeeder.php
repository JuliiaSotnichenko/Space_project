<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class itinerariesSeeder extends Seeder
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
                'discriptian' => 'Travel around planet Earth',
                'duration' => '21 days',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itinerary 2',
                'discriptian' => 'To the Moon and back',
                'duration' => '2 months',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itinerary 3',
                'discriptian' => '3 days on the Moon',
                'duration' => '2 months',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itinerary 4',
                'discriptian' => 'Mars express',
                'duration' => '4 months',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itenerary 5',
                'discriptian' => 'One month on Mars',
                'duration' => '10 months',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]
        ]);
    }
}
