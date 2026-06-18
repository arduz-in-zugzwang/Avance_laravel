<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Letra
 *
 * @property $id
 * @property $id_cancion
 * @property $letra_cancion
 * @property $texto_fonetico
 * @property $created_at
 * @property $updated_at
 *
 * @property Cancione $cancione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Letra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_cancion', 'letra_cancion', 'texto_fonetico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cancione()
    {
        return $this->belongsTo(\App\Models\Cancione::class, 'id_cancion', 'id');
    }
    
}
