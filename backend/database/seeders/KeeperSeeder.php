<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("keepers")->insert([
            [
                "name" => "Első Gazdi",
                "address" => "Első gazdi lokáció",
                "phone" => "06707998431",
                "email" => "elsogazdi@gmail.com"
            ],
            [
                "name" => "Második Gazdi",
                "address" => "Második gazdi lokáció",
                "phone" => "06309774178",
                "email" => "masodikgazdi@gmail.com"
            ],
        ]);
    }
}
