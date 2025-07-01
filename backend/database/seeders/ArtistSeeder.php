<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("artists")->insert([
            [
                "name" => "Első Artist",
                "birth" => "1996-11-01",
                "genre" => "Rap"
            ],
            [
                "name" => "Második Artist",
                "birth" => "1993-06-25",
                "genre" => "Metalcore"
            ]
        ]);
    }
}
