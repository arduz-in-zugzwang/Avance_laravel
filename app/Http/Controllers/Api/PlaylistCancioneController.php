<?php

namespace App\Http\Controllers\Api;

use App\Models\PlaylistCancione;
use Illuminate\Http\Request;
use App\Http\Requests\PlaylistCancioneRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlaylistCancioneResource;

class PlaylistCancioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $playlistCanciones = PlaylistCancione::paginate();

        return PlaylistCancioneResource::collection($playlistCanciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlaylistCancioneRequest $request): JsonResponse
    {
        $playlistCancione = PlaylistCancione::create($request->validated());

        return response()->json(new PlaylistCancioneResource($playlistCancione));
    }

    /**
     * Display the specified resource.
     */
    public function show(PlaylistCancione $playlistCancione): JsonResponse
    {
        return response()->json(new PlaylistCancioneResource($playlistCancione));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlaylistCancioneRequest $request, PlaylistCancione $playlistCancione): JsonResponse
    {
        $playlistCancione->update($request->validated());

        return response()->json(new PlaylistCancioneResource($playlistCancione));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(PlaylistCancione $playlistCancione): Response
    {
        $playlistCancione->delete();

        return response()->noContent();
    }
}
