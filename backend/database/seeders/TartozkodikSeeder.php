<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TartozkodikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tartozkodik")->insert([
            [
                "allat_id"=>1,
                "rendelo_id"=>1
            ],
            [
                "allat_id"=>2,
                "rendelo_id"=>2
            ]
        ]);
    }
}
