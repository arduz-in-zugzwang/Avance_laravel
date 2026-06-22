<?php

namespace App\Http\Controllers\Api;

use App\Models\Cancione;
use Illuminate\Http\Request;
use App\Http\Requests\CancioneRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CancioneResource;

class CancioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $canciones = Cancione::with('artista')->paginate();

         return CancioneResource::collection($canciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CancioneRequest $request): JsonResponse
    {
        $cancione = Cancione::create($request->validated());

        return response()->json(new CancioneResource($cancione));
    }

    /**
     * Display the specified resource.
     */
    public function show(Cancione $cancione): JsonResponse
    {
        return response()->json(new CancioneResource($cancione));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CancioneRequest $request, Cancione $cancione): JsonResponse
    {
        $cancione->update($request->validated());

        return response()->json(new CancioneResource($cancione));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Cancione $cancione): Response
    {
        $cancione->delete();

        return response()->noContent();
    }
}
