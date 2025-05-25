<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GuestCanRegisterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_guest_can_registrate_into_the_system(): void
    {
        $response = $this->post('api/register/owner', [
            'name' => 'Test Name',
            'address' => 'Test Address',
            'email' => 'test@example.com',
            'password' => 'password123',
            'phone' => '06702121122',
        ]);

        $response->dump();

        $this->assertDatabaseHas('owners', [
            'email' => 'test@example.com',
        ]);
    }
}
