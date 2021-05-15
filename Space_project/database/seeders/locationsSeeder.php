<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class locationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
                'lauch_location' => 'Europ Lauch',
                'time_lauch_location' => '12:00',
                'landing_location' => 'Atlantic',
                'time_landing_location' => '12:00',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'lauch_location' => 'Russia Lauch',
                'time_lauch_location' => '1:00',
                'landing_location' => 'Atlantic',
                'time_landing_location' => '12:00',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'lauch_location' => 'America Lauch',
                'time_lauch_location' => '12:00',
                'landing_location' => 'Atlantic',
                'time_landing_location' => '12:00',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]

        ]);
    }
}
