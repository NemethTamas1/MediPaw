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

//Admin: 1|MjBtWCT5oSfIBTk8Ebt9Mq2rEsvlKMCOrVAMsqas8fe72cb3
//Test: 2|LUhP8BltLhSRf2fUWDHqfY81mGSjF3q8rvHQFhKY3aa4c164