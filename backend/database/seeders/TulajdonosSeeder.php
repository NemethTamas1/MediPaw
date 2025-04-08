<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TulajdonosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tulajdonos")->insert([
            [
                "gazdi_id"=>1,
                "allat_id"=>1
            ],
            [
                "gazdi_id"=>2,
                "allat_id"=>2
            ]
        ]);
    }
}
