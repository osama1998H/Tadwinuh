<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Models\Province;
use Illuminate\Http\Response;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $province = Province::all();
        return response()->json($province);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvinceRequest $request)
    {
        $province = Province::create($request->validated());
        return response($province, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        return response()->json($province);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProvinceRequest $request, Province $province)
    {
        $province->update($request->validated());
        return response()->json($province);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        $province->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
