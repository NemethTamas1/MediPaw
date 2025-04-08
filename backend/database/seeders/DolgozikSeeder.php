<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DolgozikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("dolgozik")->insert([
            [
                "orvos_id"=>1,
                "rendelo_id"=>1
            ],
            [
                "orvos_id"=>2,
                "rendelo_id"=>2
            ]
        ]);
    }
}
