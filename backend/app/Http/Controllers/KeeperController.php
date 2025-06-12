<?php

namespace App\Http\Controllers;

use App\Http\Resources\KeeperResource;
use App\Models\Keeper;
use Illuminate\Http\Request;

class KeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Keeper::with(["animals"])->get();
        return KeeperResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Keep $tulajdonos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keep $tulajdonos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keep $tulajdonos)
    {
        //
    }
}
