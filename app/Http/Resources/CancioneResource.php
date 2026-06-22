<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CancioneResource extends JsonResource
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
        'nombre_cancion' => $this->nombre_cancion,
        'nombre_artistico' => $this->artista?->nombre_artistico,
        'portada_cancion' => $this->portada_cancion,
        'path_link' => $this->path_link,
        'id_album' => $this->id_album,
        'id_artista' => $this->id_artista
        ];
    }
}
