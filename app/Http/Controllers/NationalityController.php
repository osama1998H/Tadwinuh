<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNationalityRequest;
use App\Http\Requests\UpdateNationalityRequest;
use App\Models\Nationality;
use Illuminate\Http\Response;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nationality = Nationality::all();
        return response()->json($nationality);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNationalityRequest $request)
    {
        $nationality = Nationality::create($request->validated());
        return response($nationality, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nationality $nationality)
    {
        return response()->json($nationality);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNationalityRequest $request, Nationality $nationality)
    {
        $nationality->update($request->validated());
        return response()->json($nationality);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nationality $nationality)
    {
        $nationality->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
