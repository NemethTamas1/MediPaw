<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("musics")->insert([
            [
                "format" => "Bakelit",
                "price" => 20000
            ],
            [
                "format" => "CD",
                "price" => 6000
            ]
        ]);
    }
}
