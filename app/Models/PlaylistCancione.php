<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PlaylistCancione
 *
 * @property $id
 * @property $id_playlist
 * @property $id_cancion
 * @property $created_at
 * @property $updated_at
 *
 * @property Cancione $cancione
 * @property Playlist $playlist
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PlaylistCancione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_playlist', 'id_cancion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cancione()
    {
        return $this->belongsTo(\App\Models\Cancione::class, 'id_cancion', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function playlist()
    {
        return $this->belongsTo(\App\Models\Playlist::class, 'id_playlist', 'id');
    }
    
}
