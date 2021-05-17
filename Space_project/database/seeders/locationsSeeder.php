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
                'time_launch_location' => '02:46',
                'landing_location' => 'Kazakh Steppe',
                'time_landing_location' => '15:58',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Boca Chica Starbase',
                'time_launch_location' => '07:28',
                'landing_location' => 'Boca Chica Starbase',
                'time_landing_location' => '18:03',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Tanegashima Space Center',
                'time_launch_location' => '12:38',
                'landing_location' => 'Pacific Ocean',
                'time_landing_location' => '22:14',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Guiana Space Center',
                'time_launch_location' => '15:52',
                'landing_location' => 'Kourou Airport',
                'time_landing_location' => '08:15',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Kennedy Space Center',
                'time_launch_location' => '19:11',
                'landing_location' => 'Atlantic Ocean',
                'time_landing_location' => '11:10',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'launch_location' => 'Vikram Sarabhai Space Center',
                'time_launch_location' => '13:40',
                'landing_location' => 'Indian Ocean',
                'time_landing_location' => '06:12',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],

        ]);
    }
}
