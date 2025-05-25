<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseSeederAndMigrationTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_seeders_and_migrations_run_successfully(): void
    {
        $this->artisan('db:seed')->assertExitCode(0);

        $this->assertDatabaseCount('animals', 2);

        $this->assertTrue(DB::table('animals')->exists());
    }
}
