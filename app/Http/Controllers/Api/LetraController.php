<?php

namespace App\Http\Controllers\Api;

use App\Models\Letra;
use Illuminate\Http\Request;
use App\Http\Requests\LetraRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\LetraResource;

class LetraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $letras = Letra::paginate();

        return LetraResource::collection($letras);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LetraRequest $request): JsonResponse
    {
        $letra = Letra::create($request->validated());

        return response()->json(new LetraResource($letra));
    }

    /**
     * Display the specified resource.
     */
    public function show(Letra $letra): JsonResponse
    {
        return response()->json(new LetraResource($letra));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LetraRequest $request, Letra $letra): JsonResponse
    {
        $letra->update($request->validated());

        return response()->json(new LetraResource($letra));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Letra $letra): Response
    {
        $letra->delete();

        return response()->noContent();
    }
}
