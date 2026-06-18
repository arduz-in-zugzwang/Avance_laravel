<?php

namespace App\Http\Controllers\Api;

use App\Models\Albume;
use Illuminate\Http\Request;
use App\Http\Requests\AlbumeRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\AlbumeResource;

class AlbumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $albumes = Albume::paginate();

        return AlbumeResource::collection($albumes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumeRequest $request): JsonResponse
    {
        $albume = Albume::create($request->validated());

        return response()->json(new AlbumeResource($albume));
    }

    /**
     * Display the specified resource.
     */
    public function show(Albume $albume): JsonResponse
    {
        return response()->json(new AlbumeResource($albume));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlbumeRequest $request, Albume $albume): JsonResponse
    {
        $albume->update($request->validated());

        return response()->json(new AlbumeResource($albume));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Albume $albume): Response
    {
        $albume->delete();

        return response()->noContent();
    }
}
