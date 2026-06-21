<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tags = Tag::paginate();

        return TagResource::collection($tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request): JsonResponse
    {
        $tag = Tag::create($request->validated());

        return response()->json(new TagResource($tag));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag): JsonResponse
    {
        return response()->json(new TagResource($tag));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag): JsonResponse
    {
        $tag->update($request->validated());

        return response()->json(new TagResource($tag));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
//responder que se borro
        return response()->json(['message' => 'Tag borrado Satisfactoriamente'],200);
    }
}
