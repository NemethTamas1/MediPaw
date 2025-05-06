<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGazdiRequest;
use App\Http\Requests\UpdateGazdiRequest;
use App\Http\Resources\GazdiResource;
use App\Models\Gazdi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GazdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gazdi::all();

        return GazdiResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGazdiRequest $request)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        $ujGazdi = Gazdi::create($data);

        return new GazdiResource($ujGazdi);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Gazdi::findOrFail($id);

        return new GazdiResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGazdiRequest $request, $id)
    {
        $ujData = $request->validated();

        $regiGazdi = Gazdi::findOrFail($id);

        $regiGazdi->update($ujData);

        $ujGazdi = Gazdi::findOrFail($id);

        return new GazdiResource($ujGazdi);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gazdi = Gazdi::findOrFail($id);

        return ($gazdi->delete()) ? response()->noContent() : abort(500);
    }
}
