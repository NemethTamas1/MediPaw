<?php

namespace Database\Seeders;

use Faker\Core\DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("treatments")->insert([
            [
                "treatmentType"=>"Oltás",
                "date"=>"2025.06.12",
            ],
            [
                "treatmentType"=>"Műtét",
                "date"=>"2025.06.12",
            ],
        ]);
    }
}
