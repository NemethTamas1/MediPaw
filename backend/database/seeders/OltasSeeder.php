<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OltasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("oltasok")->insert([
            [
                "id"=>1,
                "oltasTipus"=>"Tipus1"
            ],
            [
                "id"=>2,
                "oltasTipus"=>"Tipus2"
            ]
        ]);
    }
}
