<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DolgozokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("dolgozok")->insert([
            [
                "id"=>1,
                "name"=>"AdminOrvos",
                "telefon"=>"AdminOrvosTelefonszama",
                "role"=>"admin",
                "password"=>"AdminOrvosJelszo",
                "email"=>"adminorvos@gmail.com",
                "beosztas"=>"orvos"
            ],
            [
                "id"=>2,
                "name"=>"UserTakarito",
                "telefon"=>"UserTakaritoTelefonszama",
                "role"=>"user",
                "password"=>"UserTakaritoJelszo",
                "email"=>"usertakarito@gmail.com",
                "beosztas"=>"takarito"
            ]
        ]);
    }
}
