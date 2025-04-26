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
                "name"=>"Dr. Trükkös Tihamér",
                "telefon"=>"06307589223",
                "role"=>"admin",
                "password"=>Hash::make("trukkostihamer"),
                "email"=>"trutih@gmail.com",
                "beosztas"=>"orvos"
            ],
            [
                "id"=>2,
                "name"=>"Böjte Erzsébet",
                "telefon"=>"06205446712",
                "role"=>"user",
                "password"=>Hash::make("bojteerzsebet"),
                "email"=>"bojerz@gmail.com",
                "beosztas"=>"takarito"
            ]
        ]);
    }
}
