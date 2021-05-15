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
                'name' => 'itenerary 1',
                'discriptian' => 'view of planet earth',
                'duration' => '2 mounth',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itenerary 2',
                'discriptian' => 'view of planet earth and moon',
                'duration' => '3 mounth',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'itenerary 3',
                'discriptian' => 'one day in moon',
                'duration' => '4 mounth',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ]
        ]);
    }
}
