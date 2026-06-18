<?php

namespace App\Http\Controllers\Api;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Requests\LikeRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\LikeResource;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $likes = Like::paginate();

        return LikeResource::collection($likes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LikeRequest $request): JsonResponse
    {
        $like = Like::create($request->validated());

        return response()->json(new LikeResource($like));
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like): JsonResponse
    {
        return response()->json(new LikeResource($like));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LikeRequest $request, Like $like): JsonResponse
    {
        $like->update($request->validated());

        return response()->json(new LikeResource($like));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Like $like): Response
    {
        $like->delete();

        return response()->noContent();
    }
}
