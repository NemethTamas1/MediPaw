<?php

namespace Database\Seeders;

use App\Models\Dolgozo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AnimalSeeder::class);
        $this->call(ArrangesSeeder::class);
        $this->call(KeeperSeeder::class);
        $this->call(HasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ServesSeeder::class);
        $this->call(TreatmentSeeder::class);
    }
}