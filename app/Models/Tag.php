<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * @property $id
 * @property $nombre_tag
 * @property $descripcion_tag
 * @property $created_at
 * @property $updated_at
 *
 * @property CancionTag[] $cancionTags
 * @property CancionTag[] $cancionTags
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tag extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_tag', 'descripcion_tag'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cancionTags()
    {
        return $this->hasMany(\App\Models\CancionTag::class, 'id_tag', 'id_tag');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cancionTags()
    {
        return $this->hasMany(\App\Models\CancionTag::class, 'id', 'id_tag');
    }
    
}
