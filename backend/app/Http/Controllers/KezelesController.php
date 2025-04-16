<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKezelesRequest;
use App\Http\Requests\UpdateKezelesRequest;
use App\Http\Resources\KezelesResource;
use App\Http\Resources\TartozkodikResource;
use App\Models\Kezeles;
use Illuminate\Http\Request;

class KezelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kezeles::all();

        return KezelesResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKezelesRequest $request)
    {
        $data = $request->validated();

        $ujTartozkodas = Kezeles::create($data);

        return new KezelesResource($ujTartozkodas);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $keresett = Kezeles::findOrFail($id);

        return new KezelesResource($keresett);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKezelesRequest $request, $id)
    {
        //Data validálás
        $ujData = $request->validated();

        //Frissítés
        $regiTartozkodas = Kezeles::findOrFail($id);
        $regiTartozkodas->update($ujData);

        //Új visszaadása
        $ujTartozkodas = Kezeles::findOrFail($id);
        return new KezelesResource($ujTartozkodas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kezeles = Kezeles::findOrFail($id);

        return ($kezeles->delete()) ? response()->noContent() : abort(500);
    }
}
