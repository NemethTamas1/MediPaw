<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RendeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("rendelok")->insert([
            [
                "id"=>1,
                "allat_id"=>1,
                "gazdi_id"=>1,
                "dolgozo_id"=>1,
                "cim"=>"Mancsos Gyógykuckó",
                "nyitvatartas"=>"8:00 - 20:00"
            ],
            [
                "id"=>2,
                "allat_id"=>2,
                "gazdi_id"=>2,
                "dolgozo_id"=>1,
                "cim"=>"HappyTail",
                "nyitvatartas"=>"10:00 - 18:00"
            ]
        ]);
    }
}
