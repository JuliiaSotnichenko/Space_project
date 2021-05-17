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
                'landing_location' => 'Atlantic',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'lauch_location' => 'Russia Lauch',
                'landing_location' => 'Atlantic',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'lauch_location' => 'America Lauch',
                'landing_location' => 'Atlantic',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]

        ]);
    }
}
