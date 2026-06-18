<?php

namespace App\Http\Controllers\Api;

use App\Models\ComentariosArtista;
use Illuminate\Http\Request;
use App\Http\Requests\ComentariosArtistaRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ComentariosArtistaResource;

class ComentariosArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $comentariosArtistas = ComentariosArtista::paginate();

        return ComentariosArtistaResource::collection($comentariosArtistas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComentariosArtistaRequest $request): JsonResponse
    {
        $comentariosArtista = ComentariosArtista::create($request->validated());

        return response()->json(new ComentariosArtistaResource($comentariosArtista));
    }

    /**
     * Display the specified resource.
     */
    public function show(ComentariosArtista $comentariosArtista): JsonResponse
    {
        return response()->json(new ComentariosArtistaResource($comentariosArtista));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComentariosArtistaRequest $request, ComentariosArtista $comentariosArtista): JsonResponse
    {
        $comentariosArtista->update($request->validated());

        return response()->json(new ComentariosArtistaResource($comentariosArtista));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(ComentariosArtista $comentariosArtista): Response
    {
        $comentariosArtista->delete();

        return response()->noContent();
    }
}
