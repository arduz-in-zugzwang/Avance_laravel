<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Albume
 *
 * @property $id
 * @property $nombre_album
 * @property $descripcion_album
 * @property $fecha_lanzamiento
 * @property $portada_album
 * @property $id_artista
 * @property $created_at
 * @property $updated_at
 *
 * @property Artista $artista
 * @property Cancione[] $canciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Albume extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_album', 'descripcion_album', 'fecha_lanzamiento', 'portada_album', 'id_artista'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artista()
    {
        return $this->belongsTo(\App\Models\Artista::class, 'id_artista', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function canciones()
    {
        return $this->hasMany(Cancione::class, 'id_album', 'id');
    }
    
}
