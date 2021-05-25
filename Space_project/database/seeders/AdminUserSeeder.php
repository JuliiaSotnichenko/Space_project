<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Adding the admins to the database when seeding

        DB::table('users')->insert([
            "first_name" => "Steve",
            "last_name" => "Zeid",
            "training_status" => "Training Phase 1",
            "country" => "Luxembourg",
            "role" => "admin",
            "email" => "steve.zeid@hot.mail",
            "password" => Hash::make('Agent4336'),
            "created_at" => date(now()),
            "updated_at" => date(now())

        ]);
    }
}
