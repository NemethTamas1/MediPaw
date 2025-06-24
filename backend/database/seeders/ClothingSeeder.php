<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClothingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clothing")->insert([
            [
                "size" => "L",
                "sex" => "M",
                "color" => "Black",
                "price"  => 10000
            ],
            [
                "size" => "L",
                "sex" => "U",
                "color" => "White/Red",
                "price" => 38700,
            ]
        ]);
    }
}
