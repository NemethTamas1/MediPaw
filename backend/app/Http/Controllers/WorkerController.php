<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDolgozoRequest;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Resources\DolgozoResource;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Worker::all();

        return WorkerResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkerRequest $request)
    {
        $data = $request->validated();

        $ujDolgozo = Worker::create($data);

        return new WorkerResource($ujDolgozo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dolgozo = Worker::findOrFail($id);

        return new WorkerResource($dolgozo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
