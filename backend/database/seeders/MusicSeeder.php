<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicSeeder extends Seeder
{
    public function run(): void
    {
        Music::factory()->count(1)->create()->each(
            function ($music) {
                $music->merch()->create([
                    'artist_id' => 1,
                    'name' => 'Teszt Zenebona',
                    'description' => 'Első Zene Leírás',
                    'type' => 'music',
                    "image_url" => "asdasd"
                ]);
        });

        Music::factory()->count(1)->create()->each(
            function ($music) {
                $music->merch()->create([
                    'artist_id' => 2,
                    'name' => 'Teszt Zenebona Kettő',
                    'description' => 'Második Zene Leírás',
                    'type' => 'music',
                    "image_url" => "asdasd"
                ]);
        });
    }
}
