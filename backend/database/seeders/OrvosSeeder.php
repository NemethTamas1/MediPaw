<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrvosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("orvosok")->insert([
            [
                "id"=>1,
                "nev"=>"Dr. Mezei Anita",
                "cim"=>"Liliom utca 1",
                "telefon"=>"06708793451"
            ],
            [
                "id"=>2,
                "nev"=>"Dr. Pataki Ernő",
                "cim"=>"Sáfrány köz 13/B",
                "telefon"=>"06308273945"
            ]
        ]);
    }
}
