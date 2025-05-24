<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestRegistration extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_Guest_Can_Registrate(): void
    {
        
        // Arrange
        $userData = [
            'nev' => 'Teszt Név',
            'cim' => 'Teszt Cím',
            'telefon' => '0671221212',
            'email' => 'teszt@teszt.com',
            'password' => 'TesztJelszo123'
        ];

        // Act
        $response = $this->post('/gazdik', $userData);

        // Assert
        $this->assertDatabaseHas('gazdik', [
            'email' => 'teszt@teszt.com'
        ]);
    }
}
