<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKezelesRequest;
use App\Http\Requests\StoreTreatmentRequest;
use App\Http\Requests\UpdateKezelesRequest;
use App\Http\Requests\UpdateTreatmentRequest;
use App\Http\Resources\KezelesResource;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Treatment::all();

        return KezelesResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreatmentRequest $request)
    {
        $data = $request->validated();

        $ujTartozkodas = Treatment::create($data);

        return new KezelesResource($ujTartozkodas);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $keresett = Treatment::findOrFail($id);

        return new KezelesResource($keresett);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTreatmentRequest $request, $id)
    {
        //Data validálás
        $ujData = $request->validated();

        //Frissítés
        $regiTartozkodas = Treatment::findOrFail($id);
        $regiTartozkodas->update($ujData);

        //Új visszaadása
        $ujTartozkodas = Treatment::findOrFail($id);
        return new KezelesResource($ujTartozkodas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kezeles = Treatment::findOrFail($id);

        return ($kezeles->delete()) ? response()->noContent() : abort(500);
    }
}
