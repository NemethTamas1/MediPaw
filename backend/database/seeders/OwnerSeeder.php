<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("owners")->insert([
            [
                "id"=>1,
                "name"=>"Tóth Imre",
                "address"=>"Eper utca 23",
                "phone"=>"06302541724",
                "email"=>"tothimre@gmail.com",
                "password"=>Hash::make("tothimre")
            ],
            [
                "id"=>2,
                "name"=>"Takács Zsófia",
                "address"=>"Petőfi út 3",
                "phone"=>"06202321754",
                "email"=>"takacszsofia@gmail.com",
                "password"=>Hash::make("takacszsofia")
            ]
        ]);
    }
}
