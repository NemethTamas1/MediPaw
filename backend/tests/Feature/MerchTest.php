<?php

namespace Tests\Feature;

use App\Models\Music;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MerchTest extends TestCase
{
    public function test_can_create_merch_for_artist() {
        $music = Music::create([
            'type' => 'Kazetta'
        ]);

        $payload = [
            'artist_id' => 1,
            'name' => 'TestName',
            'description' => 'TestDescription',
            'type' => 'Music',
            'image_url' => 'asd'
        ];

        $response = $this->postJson("/merches", $payload);

        
    }
}
