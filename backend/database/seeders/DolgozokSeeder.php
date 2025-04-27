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
                "name"=>"Dr. Bényi Zsolt",
                "telefon"=>"06307589223",
                "role"=>"admin",
                "password"=>Hash::make("benyizsolt"),
                "email"=>"benzso@gmail.com",
                "beosztas"=>"orvos"
            ],
            [
                "id"=>2,
                "name"=>"Szabó Erzsébet",
                "telefon"=>"06205446712",
                "role"=>"user",
                "password"=>Hash::make("szaboerzsebet"),
                "email"=>"szaerz@gmail.com",
                "beosztas"=>"takarito"
            ],
            [
                "id"=>3,
                "name"=>"Sarkadi Klaudia",
                "telefon"=>"06706551962",
                "role"=>"admin",
                "password"=>Hash::make("sarkadiklaudia"),
                "email"=>"sarkla@gmail.com",
                "beosztas"=>"asszisztens"
            ]
        ]);
    }
}
