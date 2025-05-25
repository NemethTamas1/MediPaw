<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClinicRequest;
use App\Http\Requests\StoreRendeloRequest;
use App\Http\Requests\UpdateClinicRequest;
use App\Http\Requests\UpdateRendeloRequest;
use App\Http\Resources\RendeloResource;
use App\Models\Clinic;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use function Termwind\render;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Clinic::with(["dolgozok", "allatok"])->get();

        return RendeloResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinicRequest $request)
    {
        $data = $request->validated();

        $ujRendelo = Clinic::create($data);

        $rendelo = Clinic::with(["dolgozok", "allatok"])->findOrFail($ujRendelo->id);

        return new RendeloResource($rendelo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rendelo = Clinic::with(["dolgozok", "allatok"])->findOrFail($id);

        return new RendeloResource($rendelo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinicRequest $request, $id)
    {
        $beerkezoData = $request->validated();

        $regiRendelo = Clinic::findOrFail($id);

        $regiRendelo->update($beerkezoData);

        return new RendeloResource($regiRendelo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rendelo = Clinic::findOrFail($id);

        return ($rendelo->delete()) ? response()->noContent() : abort(500);
    }
}
