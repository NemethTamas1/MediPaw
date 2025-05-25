<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clinics")->insert([
            [
                "id"=>1,
                "name"=>"MediPaw",
                "address"=>"Budapest, 1072, Arany János utca 12",
                "openingHours"=>"8:00 - 20:00"
            ]
        ]);
    }
}
