<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Artista
 *
 * @property $id
 * @property $id_usuario
 * @property $nombre_artistico
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property CancionesArtista[] $cancionesArtistas
 * @property Albume[] $albumes
 * @property Cancione[] $canciones
 * @property ComentariosArtista[] $comentariosArtistas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Artista extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_usuario', 'nombre_artistico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_usuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cancionesArtistas()
    {
        return $this->hasMany(\App\Models\CancionesArtista::class, 'id_artista', 'id_artista');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function albumes()
    {
        return $this->hasMany(\App\Models\Albume::class, 'id', 'id_artista');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function canciones()
    {
        return $this->hasMany(\App\Models\Cancione::class, 'id', 'id_artista');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentariosArtistas()
    {
        return $this->hasMany(\App\Models\ComentariosArtista::class, 'id', 'id_artista');
    }
    
}
