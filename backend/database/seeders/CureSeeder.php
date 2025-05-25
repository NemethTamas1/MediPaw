<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cures")->insert([
            [
                "id"=>1,
                "cureType"=>"Tipus1"
            ],
            [
                "id"=>2,
                "cureType"=>"Tipus2"
            ]
        ]);
    }
}
