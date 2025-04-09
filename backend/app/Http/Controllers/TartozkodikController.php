<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTartozkodikRequest;
use App\Http\Requests\UpdateTartozkodikRequest;
use App\Http\Resources\TartozkodikResource;
use App\Models\Tartozkodik;
use Illuminate\Http\Request;

class TartozkodikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tartozkodik::all();

        return TartozkodikResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTartozkodikRequest $request)
    {
        $data = $request->validated();

        $ujTartozkodas = Tartozkodik::create($data);

        return new TartozkodikResource($ujTartozkodas);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $keresett = Tartozkodik::findOrFail($id);

        return new TartozkodikResource($keresett);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTartozkodikRequest $request, $id)
    {
        //Data validálás
        $ujData = $request->validated();

        //Frissítés
        $regiTartozkodas = Tartozkodik::findOrFail($id);
        $regiTartozkodas->update($ujData);

        //Új visszaadása
        $ujTartozkodas = Tartozkodik::findOrFail($id);
        return new TartozkodikResource($ujTartozkodas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tartozkodas = Tartozkodik::findOrFail($id);

        return ($tartozkodas->delete()) ? response()->noContent() : abort(500);
    }
}
