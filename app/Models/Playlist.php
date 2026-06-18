<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Playlist
 *
 * @property $id
 * @property $nombre_playlist
 * @property $id_usuario
 * @property $privacidad_playlist
 * @property $fecha_playlist
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property PlaylistCancione[] $playlistCanciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Playlist extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_playlist', 'id_usuario', 'privacidad_playlist', 'fecha_playlist'];


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
    public function playlistCanciones()
    {
        return $this->hasMany(\App\Models\PlaylistCancione::class, 'id_playlist', 'id_playlist');
    }

}
