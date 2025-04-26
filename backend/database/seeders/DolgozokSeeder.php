<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                "name"=>"admin",
                "telefon"=>"AdminOrvosTelefonszama",
                "role"=>"admin",
                "password"=>Hash::make("adminadmin"),
                "email"=>"admin@gmail.com",
                "beosztas"=>"orvos"
            ],
            [
                "id"=>2,
                "name"=>"UserTakarito",
                "telefon"=>"UserTakaritoTelefonszama",
                "role"=>"user",
                "password"=>Hash::make("UserTakaritoJelszo"),
                "email"=>"usertakarito@gmail.com",
                "beosztas"=>"takarito"
            ]
        ]);
    }
}
