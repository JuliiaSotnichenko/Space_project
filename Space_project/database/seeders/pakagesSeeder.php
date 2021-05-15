<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pakagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pakages')->insert([

            [
                'name' => 'gold',
                'discription' => 'etapa',
                'price' => '10000',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'silver',
                'discription' => 'etapa2',
                'price' => '8000',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],
            [
                'name' => 'bronze',
                'discription' => 'etapa3',
                'price' => '6000',
                'created_at' => date(now()),
                'updated_at' => date(now())
            ],

        ]);
        //
    }
}
