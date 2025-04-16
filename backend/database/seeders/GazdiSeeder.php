<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GazdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("gazdik")->insert([
            [
                "id"=>1,
                "nev"=>"Tóth Imre",
                "cim"=>"Eper utca 23",
                "telefon"=>"06302541724",
                "email"=>"tothimre@gmail.com"
            ],
            [
                "id"=>2,
                "nev"=>"Takács Zsófia",
                "cim"=>"Petőfi út 3",
                "telefon"=>"06202321754",
                "email"=>"takacszsofia@gmail.com"
            ]
        ]);
    }
}
