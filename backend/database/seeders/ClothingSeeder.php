<?php

namespace Database\Seeders;

use App\Models\Clothing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClothingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Clothing::factory()->count(1)->create()->each(function ($clothing) {
            $clothing->merch()->create([
                'artist_id' => 1,
                'name' => 'Fekete Póló',
                'description' => 'Prémium minőségű, 100% pamutból készült fekete póló, elöl egyedi Skeleton grafikai nyomattal.',
                'type' => 'clothing',
                "image_url" => "asdasd"
            ]);
        });

        Clothing::factory()->count(1)->create()->each(function ($clothing) {
            $clothing->merch()->create([
                'artist_id' => 2,
                'name' => 'Merch Maszk',
                'description' => 'Maszk Leírás',
                'type' => 'clothing',
                "image_url" => "asdasd"
            ]);
        });
    }
}
