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
                'launch_location' => 'Baikonur Cosmodrome',

                'landing_location' => 'Kazakh Steppe',

                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Boca Chica Starbase',

                'landing_location' => 'Boca Chica Starbase',

                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Tanegashima Space Center',

                'landing_location' => 'Pacific Ocean',

                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Guiana Space Center',

                'landing_location' => 'Kourou Airport',

                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Kennedy Space Center',

                'landing_location' => 'Atlantic Ocean',

                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Vikram Sarabhai Space Center',

                'landing_location' => 'Indian Ocean',

                'created_at' => date(now()),
                'updated_at' => date(now())
            ],

        ]);
    }
}
