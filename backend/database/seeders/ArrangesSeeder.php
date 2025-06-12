<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArrangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("arranges")->insert([
            [
                "animal_id" => 1,
                "price" => 15000,
                "description" => "Első leírás"
            ],
            [
                "animal_id" => 2,
                "price" => 6000,
                "description" => "Második leírás"
            ]
        ]);
    }
}
