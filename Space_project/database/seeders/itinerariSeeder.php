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
                'name' => 'route1',
                'discriptian' => 'arround',
                'duration' => '1',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'route2',
                'discriptian' => 'arround2',
                'duration' => '2',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],

        ]);
    }
}
