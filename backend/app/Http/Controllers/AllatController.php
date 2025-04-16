<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAllatRequest;
use App\Http\Requests\UpdateAllatRequest;
use App\Http\Resources\AllatResource;
use App\Models\Allat;
use Illuminate\Http\Request;

class AllatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Allat::all();

        return AllatResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAllatRequest $request)
    {
        $data = $request->validated();

        $newAllat = Allat::create($data);

        return new AllatResource($newAllat);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Allat::findOrFail($id);

        return new AllatResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAllatRequest $request, $id)
    {
        //Új validált adat
        $ujData = $request->validated();

        //Megkeresem a régi állatot
        $regiAllat = Allat::findOrFail($id);

        //Frissítem azt az új adatokkal
        $regiAllat->update($ujData);

        //Kikeresem az állatot
        $frissitettAllat = Allat::findOrFail($id);

        //Majd visszaadom.
        return new AllatResource($frissitettAllat);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $allat = Allat::findOrFail($id);

        return ($allat->delete()) ? response()->noContent() : abort(500);
    }
}
