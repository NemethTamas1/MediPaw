<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("workers")->insert([
            [
                "id"=>1,
                "name"=>"Dr. Bényi Zsolt",
                "phone"=>"06307589223",
                "role"=>"admin",
                "password"=>Hash::make("benyizsolt"),
                "email"=>"benzso@gmail.com",
                "post"=>"orvos"
            ],
            [
                "id"=>2,
                "name"=>"Szabó Erzsébet",
                "phone"=>"06205446712",
                "role"=>"user",
                "password"=>Hash::make("szaboerzsebet"),
                "email"=>"szaerz@gmail.com",
                "post"=>"takarito"
            ],
            [
                "id"=>3,
                "name"=>"Sarkadi Klaudia",
                "phone"=>"06706551962",
                "role"=>"admin",
                "password"=>Hash::make("sarkadiklaudia"),
                "email"=>"sarkla@gmail.com",
                "post"=>"asszisztens"
            ]
        ]);
    }
}
