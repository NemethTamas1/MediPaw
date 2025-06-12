<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("serves")->insert([
            [
                "keeper_id" => 1,
                "user_id" => 1
            ],
            [
                "keeper_id" => 2,
                "user_id" => 2
            ]
        ]);
    }
}
