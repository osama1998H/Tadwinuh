<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubAccountRequest;
use App\Http\Requests\UpdateSubAccountRequest;
use App\Models\SubAccount;
use Illuminate\Http\Response;

class SubAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subAccount = SubAccount::all();
        return response()->json($subAccount);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubAccountRequest $request)
    {
        $subAccount = SubAccount::create($request->validated());
        return response()->json($subAccount, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(SubAccount $subAccount)
    {
        return response()->json($subAccount);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubAccountRequest $request, SubAccount $subAccount)
    {
        $subAccount->update($request->validated());
        return response()->json($subAccount);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubAccount $subAccount)
    {
        $subAccount->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
