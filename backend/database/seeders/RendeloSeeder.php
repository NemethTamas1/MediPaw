<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RendeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("rendelok")->insert([
            [
                "id"=>1,
                "cim"=>"Ferihegyi út 13",
                "nyit"=>"08:00:00",
                "zar"=>"23:00:00"
            ],
            [
                "id"=>2,
                "cim"=>"Ecseri utca 2",
                "nyit"=>"07:00:00",
                "zar"=>"22:00:00"
            ]
        ]);
    }
}
