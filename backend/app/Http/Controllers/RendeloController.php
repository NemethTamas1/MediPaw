<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRendeloRequest;
use App\Http\Requests\UpdateRendeloRequest;
use App\Http\Resources\RendeloResource;
use App\Models\Rendelo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use function Termwind\render;

class RendeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rendelo::with(["dolgozok", "allatok"])->get();

        return RendeloResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRendeloRequest $request)
    {
        $data = $request->validated();

        $ujRendelo = Rendelo::create($data);

        $rendelo = Rendelo::with(["dolgozok", "allatok"])->findOrFail($ujRendelo->id);

        return new RendeloResource($rendelo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rendelo = Rendelo::with(["dolgozok", "allatok"])->findOrFail($id);

        return new RendeloResource($rendelo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRendeloRequest $request, $id)
    {
        $beerkezoData = $request->validated();

        $regiRendelo = Rendelo::findOrFail($id);

        $regiRendelo->update($beerkezoData);

        return new RendeloResource($regiRendelo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rendelo = Rendelo::findOrFail($id);

        return ($rendelo->delete()) ? response()->noContent() : abort(500);
    }
}
