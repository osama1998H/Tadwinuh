<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Currency;
use Illuminate\Http\Response;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currency = Currency::all();
        return response()->json($currency);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request)
    {
        $currency = Currency::create($request->validated());
        return response($currency, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        return response()->json($currency);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        $currency->update($request->validated());
        return response()->json($currency);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
