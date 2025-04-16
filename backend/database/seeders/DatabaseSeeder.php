<?php

namespace Database\Seeders;

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
        User::factory()->create([
            'name' => 'Teszt User',
            'email' => 'test@example.com',
            'password' => 'bob123456',
            'role' => 'user'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'admin123456',
            'role' => 'admin'
        ]);


        $this->call(AllatSeeder::class);
        $this->call(GazdiSeeder::class);
        $this->call(DolgozokSeeder::class);
        $this->call(RendeloSeeder::class);
        $this->call(KezelesSeeder::class);
        $this->call(TulajdonosSeeder::class);
        $this->call(DolgozikSeeder::class);
        $this->call(OltasSeeder::class);
        $this->call(Oltas_AllatSeeder::class);
    }
}