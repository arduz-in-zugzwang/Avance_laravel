<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
{
    return [
        'id' => $this->id,
        'id_usuario' => $this->id_usuario,
        'nombre_artistico' => $this->nombre_artistico,
        'pfp' => $this->user?->pfp,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
}
}
