<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("has")->insert([
            [
                "animal_id" => 1,
                "keeper_id" => 1
            ],
            [
                "animal_id" => 2,
                "keeper_id" => 2
            ]
        ]);
    }
}
