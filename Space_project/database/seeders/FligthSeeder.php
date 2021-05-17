<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FligthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fligths')->insert([
            [
                'depart_date' => '2022/02/12',
                'depart_time' => '12:00',
                'arrival_date' => '2022/03/10',
                'arrival_time' => '14:00',
                'fly_ref' => 'A1',
                'itinerary_id' => 1,
                'location_id' => 1,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'depart_date' => '2022/02/21',
                'depart_time' => '14:00',
                'arrival_date' => '2022/05/15',
                'arrival_time' => '15:00',
                'fly_ref' => 'A1',
                'itinerary_id' => 1,
                'location_id' => 2,
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]
        ]);
    }
}
