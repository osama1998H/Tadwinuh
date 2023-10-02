<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Destination;
use Illuminate\Http\Response;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination = Destination::all();
        return response()->json($destination);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinationRequest $request)
    {
        $destination = Destination::create($request->validated());
        return response($destination, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return response()->json($destination);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $destination->update($request->validated());
        return response()->json($destination);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
