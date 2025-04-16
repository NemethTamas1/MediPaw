<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Oltas_AllatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("oltas_allat")->insert([
            [
                "oltas_id"=>1,
                "allat_id"=>1,
                "datum"=>"2025.04.16 16:11"
            ],
            [
                "oltas_id"=>2,
                "allat_id"=>2,
                "datum"=>"2025.04.12 11:00"
            ]
        ]);
    }
}
