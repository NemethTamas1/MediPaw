<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cure_AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cure_animal")->insert([
            [
                "cure_id"=>1,
                "animal_id"=>1,
                "date"=>"2025.04.16 16:11"
            ],
            [
                "cure_id"=>2,
                "animal_id"=>2,
                "date"=>"2025.04.12 11:00"
            ]
        ]);
    }
}
