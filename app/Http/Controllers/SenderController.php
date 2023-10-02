<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSenderRequest;
use App\Http\Requests\UpdateSenderRequest;
use App\Models\Sender;
use Illuminate\Http\Response;

class SenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sender = Sender::all();
        return response()->json($sender);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSenderRequest $request)
    {
        $sender = Sender::create($request->validated());
        return response()->json($sender, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sender $sender)
    {
        return response()->json($sender);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSenderRequest $request, Sender $sender)
    {
        $sender->update($request->validated());
        return response()->json($sender);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sender $sender)
    {
        $sender->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
