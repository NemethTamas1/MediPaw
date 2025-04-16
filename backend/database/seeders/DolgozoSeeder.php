<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DolgozoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("dolgozok")->insert([
            [
                "id"=>1,
                "nev"=>"AdminOrvos",
                "telefon"=>"AdminOrvosTelefonszama",
                "role"=>"admin",
                "beosztas"=>"orvos"
            ],
            [
                "id"=>2,
                "nev"=>"UserTakarito",
                "telefon"=>"UserTakaritoTelefonszama",
                "role"=>"user",
                "beosztas"=>"takarito"
            ]
        ]);
    }
}
