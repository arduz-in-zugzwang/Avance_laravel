<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Siguen
 *
 * @property $id
 * @property $id_seguidor
 * @property $id_seguido
 * @property $fecha_follow
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Siguen extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_seguidor', 'id_seguido', 'fecha_follow'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_seguido', 'id');
    }

}
