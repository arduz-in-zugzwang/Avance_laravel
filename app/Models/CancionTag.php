<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CancionTag
 *
 * @property $id
 * @property $id_cancion
 * @property $id_tag
 * @property $created_at
 * @property $updated_at
 *
 * @property Cancione $cancione
 * @property Tag $tag
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CancionTag extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_cancion', 'id_tag'];


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
    public function tag()
    {
        return $this->belongsTo(\App\Models\Tag::class, 'id_tag', 'id');
    }
    
}
