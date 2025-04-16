<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("allatok")->insert([
            [
                "id"=>1,
                "nev"=>"Bodri",
                "kor"=>3,
                "fajta"=>"Golden Retriever",
                "szin"=>"Szőke",
                "suly"=>35.0
            ],
            [
                "id"=>2,
                "nev"=>"Cirmi",
                "kor"=>2,
                "fajta"=>"Sziámi",
                "szin"=>"Szürke",
                "suly"=>1.5
            ]
        ]);
    }
}
