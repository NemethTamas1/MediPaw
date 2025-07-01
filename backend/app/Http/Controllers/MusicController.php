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
        $data = $request->validated();
        
        $music = Music::create([
            'format' => $data['format'],
            'price'  => $data['price'],
        ]);

        $music->merch()->create([
            'artist_id'  => $data['artist_id'],
            'name'       => $data['name'],
            'description'=> $data['description'],
            'image_url'  => $data['image_url'],
            "type" => "music"
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
