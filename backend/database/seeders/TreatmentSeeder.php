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
                "id"=>1,
                "description"=>"TesztLeiras1",
                "animal_id"=>1,
                "date"=>"8:00 - 20:00",
                "clinic_id"=>1,
                "paid"=>false,
                "worker_id"=>1
            ],
            [
                "id"=>2,
                "description"=>"TesztLeiras2",
                "animal_id"=>2,
                "date"=> "10:00 - 18:00",
                "clinic_id"=>1,
                "paid"=>false,
                "worker_id"=>2
            ]
        ]);
    }
}
