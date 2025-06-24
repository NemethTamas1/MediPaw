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
                "artist_id" => 1, // Peep
                "name" => "Come Over When You're Sober Part 1",
                "description" => "Come Over When You're Sober, Pt. 1 is the debut studio album by American rapper and singer Lil Peep.",
                "type" => "Music",
                "image_url" => "asd"
            ],
            [
                // id: 2
                "artist_id" => 1,
                "name" => "Black OG Skeleton T-Shirt",
                "description" => "Pamutból készült ruha, gecijó fijam vegyed megfele!",
                "type" => "Clothing",
                "image_url" => "asd"
            ],
            [
                // id: 3
                "artist_id" => 2, // Alex Terrible
                "name" => "Kingdom of Storm and Thunder",
                "description" => "“Kingdom of Storm and Thunder” is the second single of Alex Terrible's debut album. It was released November 17th 2023",
                "type" => "Music",
                "image_url" => "asd"
            ],
            [
                // id: 4
                "artist_id" => 2, // Alex Terrible
                "name" => "(SLAUGHTER TO PREVAIL) ALEX TERRIBLE MASK 'KID OF DARKNESS' (BLOODY)",
                "description" => "Mask is made of high quality plastic with soft lining, adjustable elastic straps, movable jaw.",
                "type" => "Clothing",
                "image_url" => "asd"
            ]
        ]);
    }
}
