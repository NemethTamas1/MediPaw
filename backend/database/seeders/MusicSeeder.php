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
                "type" => "Bakelit"
            ],
            [
                "type" => "CD"
            ]
        ]);
    }
}
