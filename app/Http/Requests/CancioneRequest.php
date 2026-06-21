<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CancioneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
    'id_album' => 'required|integer|exists:albunes,id',
    'id_artista' => 'required|integer|exists:artistas,id',
    'nombre_cancion' => 'required|string',
    'portada_cancion' => 'nullable|string',
    'path_link' => 'nullable|string',
];
    }
}
