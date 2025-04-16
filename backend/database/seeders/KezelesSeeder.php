<?php

namespace Database\Seeders;

use Faker\Core\DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KezelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("kezelesek")->insert([
            [
                "id"=>1,
                "leiras"=>"TesztLeiras1",
                "allat_id"=>1,
                "datum"=>"8:00 - 20:00",
                "rendelo_id"=>1,
                "kifizetve"=>false,
                "dolgozo_id"=>1
            ],
            [
                "id"=>2,
                "leiras"=>"TesztLeiras2",
                "allat_id"=>2,
                "datum"=> "10:00 - 18:00",
                "rendelo_id"=>2,
                "kifizetve"=>false,
                "dolgozo_id"=>2
            ]
        ]);
    }
}
