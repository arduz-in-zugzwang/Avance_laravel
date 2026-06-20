<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $nombre_rol
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario[] $usuarios
 * @property User[] $users
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function usuarios()
    // {
    //     return $this->hasMany(\App\Models\Usuario::class, 'id_rol', 'id_rol');
    // }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'id', 'id_rol');
    }
    
}
