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
                "rendelo_id"=>1,
                "dolgozo_id"=>1
            ],
            [
                "rendelo_id"=>2,
                "dolgozo_id"=>2
            ]
        ]);
    }
}
