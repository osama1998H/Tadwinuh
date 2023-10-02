<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\Models\Account;
use Illuminate\Http\Response;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $account = Account::all();
        return response()->json($account);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccountRequest $request)
    {
           $account = Account::create($request->validated());
           return response()->json($account, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        return response()->json($account);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        $account->update($request->validated());
        return response()->json($account);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
