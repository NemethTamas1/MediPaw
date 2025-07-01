<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\StoreArtistResource;
use App\Http\Requests\StoreClothingRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Http\Requests\UpdateClothingRequest;
use App\Http\Resources\ArtistResource;
use App\Http\Resources\ClothingResource;
use App\Models\Artist;
use App\Models\Clothing;
use App\Models\Merch;

class ClothingController
{
    public function index()
    {
        $data = Clothing::all();

        return ClothingResource::collection($data);
    }
    public function store(StoreClothingRequest $request)
    {
        $data = $request->validated();

        $clothing = new Clothing([
            "size" => $data['size'],
            "sex" => $data['sex'],
            "color" => $data['color'],
            "price" => $data['price'],
        ]);
        $clothing->save();

        $clothing->merch()->create([
            'artist_id' => $data['artist_id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'image_url' => $data['image_url'],
            'type' => "clothing",
        ]);

        return new ClothingResource($clothing->load('merch'));
    }

    public function show(Clothing $clothing)
    {
        //
    }

    public function update(UpdateClothingRequest $request, Clothing $clothing)
    {
        $data = $request->validated();

        $clothing->update($data);

        return new ClothingResource($clothing);
    }

    public function destroy(Clothing $clothing)
    {
        return ($clothing->delete()) ? response()->noContent() : abort(500);
    }
}
