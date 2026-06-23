<?php

namespace App\Http\Controllers\Api;

use App\Models\Artista;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistaRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistaResource;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $artistas = Artista::with('user')->paginate();
        return ArtistaResource::collection($artistas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtistaRequest $request): JsonResponse
    {
        $artista = Artista::create($request->validated());

        return response()->json(new ArtistaResource($artista));
    }

    /**
     * Display the specified resource.
     */
    public function show(Artista $artista): JsonResponse
    {
        return response()->json(new ArtistaResource($artista));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtistaRequest $request, Artista $artista): JsonResponse
    {
        $artista->update($request->validated());

        return response()->json(new ArtistaResource($artista));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Artista $artista): Response
    {
        $artista->delete();

        return response()->noContent();
    }
}
