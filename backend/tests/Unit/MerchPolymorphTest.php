<?php

namespace Tests\Unit;

use App\Models\Music;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class MerchPolymorphTest extends TestCase
{
    use DatabaseTransactions;
    public function test_a_music_can_create_a_merch_and_morph_fields_are_set(): void
    {
        $music = Music::factory()->create([
            'type' => 'Bakelit'
        ]);

        $merch = $music->merch()->create([
            'artist_id'   => 1,
            'name'        => 'Teszt Bakelit',
            'description' => 'Leírás',
            'type'        => 'Music',
            'image_url'   => 'vinyl.jpg',
        ]);

        $this->assertDatabaseHas('merches', [
            'id'              => $merch->id,
            'merchable_type'  => Music::class,
            'merchable_id'    => $music->id,
        ]);

        $this->assertInstanceOf(Music::class, $merch->merchable);
        $this->assertEquals($music->id, $merch->merchable->id);
    }
}
