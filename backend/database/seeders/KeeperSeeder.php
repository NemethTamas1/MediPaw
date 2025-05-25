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
                "owner_id"=>1,
                "animal_id"=>1
            ],
            [
                "owner_id"=>2,
                "animal_id"=>2
            ]
        ]);
    }
}
