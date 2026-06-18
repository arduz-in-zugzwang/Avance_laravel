<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Like
 *
 * @property $id
 * @property $id_usuario
 * @property $id_cancion
 * @property $fecha_like
 * @property $created_at
 * @property $updated_at
 *
 * @property Cancione $cancione
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Like extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_usuario', 'id_cancion', 'fecha_like'];


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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_usuario', 'id');
    }
    
}
