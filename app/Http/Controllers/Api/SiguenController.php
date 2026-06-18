<?php

namespace App\Http\Controllers\Api;

use App\Models\Siguen;
use Illuminate\Http\Request;
use App\Http\Requests\SiguenRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\SiguenResource;

class SiguenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $siguens = Siguen::paginate();

        return SiguenResource::collection($siguens);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiguenRequest $request): JsonResponse
    {
        $siguen = Siguen::create($request->validated());

        return response()->json(new SiguenResource($siguen));
    }

    /**
     * Display the specified resource.
     */
    public function show(Siguen $siguen): JsonResponse
    {
        return response()->json(new SiguenResource($siguen));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SiguenRequest $request, Siguen $siguen): JsonResponse
    {
        $siguen->update($request->validated());

        return response()->json(new SiguenResource($siguen));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Siguen $siguen): Response
    {
        $siguen->delete();

        return response()->noContent();
    }
}
