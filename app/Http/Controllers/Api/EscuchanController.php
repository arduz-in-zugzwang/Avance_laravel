<?php

namespace App\Http\Controllers\Api;

use App\Models\Escuchan;
use Illuminate\Http\Request;
use App\Http\Requests\EscuchanRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\EscuchanResource;

class EscuchanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $escuchans = Escuchan::paginate();

        return EscuchanResource::collection($escuchans);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EscuchanRequest $request): JsonResponse
    {
        $escuchan = Escuchan::create($request->validated());

        return response()->json(new EscuchanResource($escuchan));
    }

    /**
     * Display the specified resource.
     */
    public function show(Escuchan $escuchan): JsonResponse
    {
        return response()->json(new EscuchanResource($escuchan));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EscuchanRequest $request, Escuchan $escuchan): JsonResponse
    {
        $escuchan->update($request->validated());

        return response()->json(new EscuchanResource($escuchan));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Escuchan $escuchan): Response
    {
        $escuchan->delete();

        return response()->noContent();
    }
}
