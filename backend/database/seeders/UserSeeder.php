<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Első doktor",
                "address" => "Első doktor lokáció",
                "phone" => "06209776431",
                "email" => "elsodoktor@gmail.com",
                "password" => Hash::make("Elsodoktor123"),
                "role" => "doctor"
            ],
            [
                "name" => "Második doktor",
                "address" => "Második doktor lokáció",
                "phone" => "06209663485",
                "email" => "masodikdoktor@gmail.com",
                "password" => Hash::make("Masodikdoktor123"),
                "role" => "doctor"
            ],

            [
                "name" => "Első asszisztens",
                "address" => "Első asszisztens lokáció",
                "phone" => "06208113549",
                "email" => "elsoasszisztens@gmail.com",
                "password" => Hash::make("Elsoasszisztens123"),
                "role" => "assistant"
            ],
            [
                "name" => "Második asszisztens",
                "address" => "Második asszisztens lokáció",
                "phone" => "06703116985",
                "email" => "masodikasszisztens@gmail.com",
                "password" => Hash::make("Masodikasszisztens123"),
                "role" => "assistant"
            ],

        ]);
    }
}
