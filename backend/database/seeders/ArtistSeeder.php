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
                "name" => "Lil Peep",
                "birth" => "1996-11-01",
                "genre" => "Emo Rap"
            ],
            [
                "name" => "Alex Terrible",
                "birth" => "1993-06-25",
                "genre" => "Metalcore/Deathcore"
            ]
        ]);
    }
}
