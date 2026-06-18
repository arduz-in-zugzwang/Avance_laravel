<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComentariosArtista
 *
 * @property $id
 * @property $id_artista
 * @property $id_usuario
 * @property $texto
 * @property $fecha_comentario
 * @property $created_at
 * @property $updated_at
 *
 * @property Artista $artista
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComentariosArtista extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_artista', 'id_usuario', 'texto', 'fecha_comentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artista()
    {
        return $this->belongsTo(\App\Models\Artista::class, 'id_artista', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_usuario', 'id');
    }
    
}
