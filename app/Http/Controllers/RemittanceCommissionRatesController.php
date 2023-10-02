<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRemittanceCommissionRatesRequest;
use App\Http\Requests\UpdateRemittanceCommissionRatesRequest;
use App\Models\RemittanceCommissionRates;
use Illuminate\Http\Response;

class RemittanceCommissionRatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $remittanceCommissionRates = RemittanceCommissionRates::all();
        return response()->json($remittanceCommissionRates);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRemittanceCommissionRatesRequest $request)
    {
        $remittanceCommissionRates = RemittanceCommissionRates::create($request->validated());
        return response()->json($remittanceCommissionRates, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(RemittanceCommissionRates $remittanceCommissionRates)
    {
        return response()->json($remittanceCommissionRates);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRemittanceCommissionRatesRequest $request, RemittanceCommissionRates $remittanceCommissionRates)
    {
        $remittanceCommissionRates->update($request->validated());
        return response()->json($remittanceCommissionRates);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RemittanceCommissionRates $remittanceCommissionRates)
    {
        $remittanceCommissionRates->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
