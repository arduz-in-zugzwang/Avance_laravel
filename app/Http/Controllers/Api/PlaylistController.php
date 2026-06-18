<?php

namespace App\Http\Controllers\Api;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Requests\PlaylistRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlaylistResource;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $playlists = Playlist::paginate();

        return PlaylistResource::collection($playlists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlaylistRequest $request): JsonResponse
    {
        $playlist = Playlist::create($request->validated());

        return response()->json(new PlaylistResource($playlist));
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist): JsonResponse
    {
        return response()->json(new PlaylistResource($playlist));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlaylistRequest $request, Playlist $playlist): JsonResponse
    {
        $playlist->update($request->validated());

        return response()->json(new PlaylistResource($playlist));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Playlist $playlist): Response
    {
        $playlist->delete();

        return response()->noContent();
    }
}
