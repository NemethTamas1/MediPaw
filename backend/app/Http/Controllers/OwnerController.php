<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGazdiRequest;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateGazdiRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Http\Resources\GazdiResource;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Owner::all();

        return GazdiResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOwnerRequest $request)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        $ujGazdi = Owner::create($data);

        return new GazdiResource($ujGazdi);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Owner::findOrFail($id);

        return new GazdiResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOwnerRequest $request, $id)
    {
        $ujData = $request->validated();

        $regiGazdi = Owner::findOrFail($id);

        $regiGazdi->update($ujData);

        $ujGazdi = Owner::findOrFail($id);

        return new GazdiResource($ujGazdi);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gazdi = Owner::findOrFail($id);

        return ($gazdi->delete()) ? response()->noContent() : abort(500);
    }
}
