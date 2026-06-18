<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cancione
 *
 * @property $id
 * @property $numero_pista
 * @property $id_album
 * @property $id_artista
 * @property $nombre_cancion
 * @property $portada_cancion
 * @property $path_link
 * @property $created_at
 * @property $updated_at
 *
 * @property Albume $albume
 * @property Artista $artista
 * @property CancionesArtista[] $cancionesArtistas
 * @property CancionTag[] $cancionTags
 * @property Letra $letra
 * @property Like[] $likes
 * @property PlaylistCancione[] $playlistCanciones
 * @property CancionTag[] $cancionTags
 * @property Escuchan[] $escuchans
 * @property Letra[] $letras
 * @property Like[] $likes
 * @property PlaylistCancione[] $playlistCanciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cancione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['numero_pista', 'id_album', 'id_artista', 'nombre_cancion', 'portada_cancion', 'path_link'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function albume()
    {
        return $this->belongsTo(\App\Models\Albume::class, 'id_album', 'id');
    }
    
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
    public function cancionesArtistas()
    {
        return $this->hasMany(\App\Models\CancionesArtista::class, 'id_cancion', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cancionTags()
    {
        return $this->hasMany(\App\Models\CancionTag::class, 'id_cancion', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function letra()
    {
        return $this->hasOne(\App\Models\Letra::class, 'id_cancion', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany(\App\Models\Like::class, 'id_cancion', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function playlistCanciones()
    {
        return $this->hasMany(\App\Models\PlaylistCancione::class, 'id_cancion', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cancionTags()
    {
        return $this->hasMany(\App\Models\CancionTag::class, 'id', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function escuchans()
    {
        return $this->hasMany(\App\Models\Escuchan::class, 'id', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function letras()
    {
        return $this->hasMany(\App\Models\Letra::class, 'id', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany(\App\Models\Like::class, 'id', 'id_cancion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function playlistCanciones()
    {
        return $this->hasMany(\App\Models\PlaylistCancione::class, 'id', 'id_cancion');
    }
    
}
