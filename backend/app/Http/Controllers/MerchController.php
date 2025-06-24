<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMerchRequest;
use App\Http\Resources\MerchResource;
use App\Models\Merch;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class MerchController
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $data = Merch::all();

        return MerchResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerchRequest $request)
    {
        $data = $request->validated();
        
        $newMerch = Merch::create($data);

        return new MerchResource($newMerch);
    }

    /**
     * Display the specified resource.
     */
    public function show(Merch $merch):JsonResource
    {
        return Merch::findOrFail($merch->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merch $merch)
    {
        $data = $request->validated();

        $updatedMerch = $merch->update($data);

        return new MerchResource($updatedMerch);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merch $merch):Response
    {
        return ($merch->delete()) ? response()->noContent() : abort(500);
    }
}
