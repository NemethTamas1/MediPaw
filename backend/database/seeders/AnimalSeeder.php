<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("animals")->insert([
            [
                "id"=>1,
                "name"=>"Bodri",
                "age"=>3,
                "breed"=>"Golden Retriever",
                "colour"=>"Szőke",
                "weight"=>35.0
            ],
            [
                "id"=>2,
                "name"=>"Cirmi",
                "age"=>2,
                "breed"=>"Sziámi",
                "colour"=>"Szürke",
                "weight"=>1.5
            ]
        ]);
    }
}
