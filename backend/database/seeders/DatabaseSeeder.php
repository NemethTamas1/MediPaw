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
        $this->call(OwnerSeeder::class);
        $this->call(WorkersSeeder::class);
        $this->call(ClinicSeeder::class);
        $this->call(TreatmentSeeder::class);
        $this->call(KeeperSeeder::class);
        $this->call(WorkingSeeder::class);
        $this->call(CureSeeder::class);
        $this->call(Cure_AnimalSeeder::class);
    }
}