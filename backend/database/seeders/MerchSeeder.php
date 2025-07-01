<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("merches")->insert([
            [
                // id: 1
                "artist_id" => 1,
                "name" => "Bakelit Album",
                "description" => "Leírás",
                "type" => "Music",
                "image_url" => "asd"
            ],
            [
                // id: 2
                "artist_id" => 1,
                "name" => "Fekete Póló",
                "description" => "Prémium minőségű, 100% pamutból készült fekete póló, elöl egyedi Skeleton grafikai nyomattal.",
                "type" => "Clothing",
                "image_url" => "asd"
            ],
            [
                // id: 3
                "artist_id" => 2,
                "name" => "CD Neve",
                "description" => "Leírás",
                "type" => "Music",
                "image_url" => "asd"
            ],
            [
                // id: 4
                "artist_id" => 2,
                "name" => "Merch Maszk",
                "description" => "Maszk Leírás",
                "type" => "Clothing",
                "image_url" => "asd"
            ]
        ]);
    }
}
