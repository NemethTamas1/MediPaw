<?php

namespace Tests\Unit;

use App\Models\Artist;
use App\Models\Clothing;
use App\Models\Music;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Symfony\Component\Clock\Clock;
use Tests\TestCase;

class MerchPolymorphTest extends TestCase
{
    use DatabaseTransactions;
    public function test_music_merch_can_be_created(): void
    {
        $artist = new Artist([
            "name" => "Test Artist",
            "birth" => "1996-11-01",
            "genre" => "Rap"
        ]);
        $artist->save();
        // A save el is menti az adatbázisba az imént létrehozott Művészt. 
        // Save() előtt csak egy objektumom volt, nem szúródott be az adatbázisba => nem kapott id-t.

        $payload = [
            "price" => 999999,
            "artist_id" => $artist->id,
            "name" => "Nagyon drága bakelit",
            "description" => "asd",
            "image_url" => "asd",
            "type" => "music",
            "format" => "Bakelit"
        ];

        $music = Music::create([
            'format' => $payload['format'],
            'price' => $payload['price']
        ]);

        $merch = $music->merch()->create([
            'artist_id' => $payload['artist_id'],
            'name' => $payload['name'],
            'description' => $payload['description'],
            'type' => $payload['type'],
            'image_url' => $payload['image_url'],
        ]);

        $this->assertDatabaseHas('merches', [
            'id'              => $merch->id,
            'merchable_type'  => Music::class,
            'merchable_id'    => $music->id,
        ]);

        $this->assertInstanceOf(Music::class, $merch->merchable);
        $this->assertEquals($music->id, $merch->merchable->id);
    }

    public function test_clothing_merch_can_be_created(): void
    {
        $artist = new Artist([
            "name" => "Test Artist",
            "birth" => "1990-01-11",
            "genre" => "Metalcore"
        ]);
        $artist->save();

        $clothing = Clothing::create([
            "size" => "L",
            "sex" => "M",
            "color" => "Fekete",
            "price" => 10000
        ]);

        $merch = $clothing->merch()->create([
            "artist_id"   => $artist->id,
            "name"        => "Teszt Ruházat",
            "description" => "Teszt Leírás",
            "image_url"   => "Asd.jpg",
            "type"        => "clothing"
        ]);

        $this->assertDatabaseHas('merches', [
            'id'              => $merch->id,
            'merchable_type'  => Clothing::class,
            'merchable_id'    => $clothing->id,
        ]);

        $this->assertInstanceOf(Clothing::class, $merch->merchable);
        $this->assertEquals($clothing->id, $merch->merchable->id);
    }
}
