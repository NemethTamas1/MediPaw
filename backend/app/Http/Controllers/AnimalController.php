<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAllatRequest;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAllatRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Http\Resources\AllatResource;
use App\Http\Resources\AnimalResource;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Animal::all();

        return AnimalResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        $data = $request->validated();

        $newAllat = Animal::create($data);

        return new AnimalResource($newAllat);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Animal::findOrFail($id);

        return new AnimalResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, $id)
    {
        //Új validált adat
        $ujData = $request->validated();

        //Megkeresem a régi állatot
        $regiAllat = Animal::findOrFail($id);

        //Frissítem azt az új adatokkal
        $regiAllat->update($ujData);

        //Kikeresem az állatot
        $frissitettAllat = Animal::findOrFail($id);

        //Majd visszaadom.
        return new AnimalResource($frissitettAllat);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $allat = Animal::findOrFail($id);

        return ($allat->delete()) ? response()->noContent() : abort(500);
    }
}
