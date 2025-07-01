<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Http\Resources\ArtistResource;
use App\Models\Artist;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class ArtistController
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $data = Artist::with(["merches"])->get();

        return ArtistResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        $data = $request->validated();

        $newArtist = Artist::create($data);

        return new ArtistResource($newArtist);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist):JsonResource
    {
        return new ArtistResource($artist->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        $data = $request->validated();

        $artist->update($data);

        return new ArtistResource($artist);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist):Response
    {
        return ($artist->delete()) ? response()->noContent() : abort(500);
    }
}
