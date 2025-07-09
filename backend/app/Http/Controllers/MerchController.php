<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMerchRequest;
use App\Http\Requests\UpdateMerchRequest;
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
        $data = Merch::with(["merchable"])->get();

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
        $data = Merch::findOrFail($merch->id);

        return new MerchResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchRequest $request, Merch $merch)
    {
        $data = $request->validated();

        $merch->update($data);

        return new MerchResource($merch);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merch $merch):Response
    {
        return ($merch->delete()) ? response()->noContent() : abort(500);
    }
}
