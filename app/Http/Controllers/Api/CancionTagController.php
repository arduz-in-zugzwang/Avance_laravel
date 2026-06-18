<?php

namespace App\Http\Controllers\Api;

use App\Models\CancionTag;
use Illuminate\Http\Request;
use App\Http\Requests\CancionTagRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CancionTagResource;

class CancionTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cancionTags = CancionTag::paginate();

        return CancionTagResource::collection($cancionTags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CancionTagRequest $request): JsonResponse
    {
        $cancionTag = CancionTag::create($request->validated());

        return response()->json(new CancionTagResource($cancionTag));
    }

    /**
     * Display the specified resource.
     */
    public function show(CancionTag $cancionTag): JsonResponse
    {
        return response()->json(new CancionTagResource($cancionTag));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CancionTagRequest $request, CancionTag $cancionTag): JsonResponse
    {
        $cancionTag->update($request->validated());

        return response()->json(new CancionTagResource($cancionTag));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(CancionTag $cancionTag): Response
    {
        $cancionTag->delete();

        return response()->noContent();
    }
}
