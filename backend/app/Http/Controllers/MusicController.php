<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use App\Http\Resources\MusicResource;
use App\Models\Music;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class MusicController
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $data = Music::all();

        return MusicResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {
        // 1) Létrehozzuk a Music rekordot – csak a Music tábla mezői (format, price)
        $music = Music::create([
            'format' => $request->format,
            'price'  => $request->price,
        ]);

        // 2) Létrehozzuk a kapcsolódó Merch rekordot – itt használjuk a name, description és image_url mezőket
        // Ezek a mezők a Merch táblához tartoznak, nem a Music modellhez.
        $music->merch()->create([
            'artist_id'  => $request->artist_id,
            'name'       => $request->name,        // <-- Merch mező, nem Music
            'description'=> $request->description, // <-- Merch mező, nem Music
            'image_url'  => $request->image_url,   // <-- Merch mező, nem Music
            "type" => $request->type
        ]);

        return new MusicResource($music->load('merch'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music): JsonResource
    {
        return new MusicResource($music->load('merch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        $data = $request->validated();

        $music->update($data);

        return new MusicResource($music);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music):Response
    {
        return ($music->delete()) ? response()->noContent() : abort(500);
    }
}
