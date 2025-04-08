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
                "gazdi_id"=>1,
                "oltva"=>true,
                "nev"=>"Bodri",
                "kor"=>3,
                "fajta"=>"Golden Retriever"
            ],
            [
                "gazdi_id"=>2,
                "oltva"=>false,
                "nev"=>"Cirmi",
                "kor"=>2,
                "fajta"=>"Sziámi" 
            ]
        ]);
    }
}
