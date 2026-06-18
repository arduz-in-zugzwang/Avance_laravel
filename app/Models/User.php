<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $id_pais
 * @property $id_rol
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $pfp
 * @property $bio
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property Paise $paise
 * @property Role $role
 * @property Artista[] $artistas
 * @property ComentariosArtista[] $comentariosArtistas
 * @property Escuchan[] $escuchans
 * @property Like[] $likes
 * @property Playlist[] $playlists
 * @property Siguen[] $siguens
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'id_pais', 'id_rol', 'email', 'pfp', 'bio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paise()
    {
        return $this->belongsTo(\App\Models\Paise::class, 'id_pais', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'id_rol', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function artistas()
    {
        return $this->hasMany(\App\Models\Artista::class, 'id', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentariosArtistas()
    {
        return $this->hasMany(\App\Models\ComentariosArtista::class, 'id', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function escuchans()
    {
        return $this->hasMany(\App\Models\Escuchan::class, 'id', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany(\App\Models\Like::class, 'id', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function playlists()
    {
        return $this->hasMany(\App\Models\Playlist::class, 'id', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguidos()
    {
        return $this->hasMany(\App\Models\Siguen::class, 'id', 'id_seguido');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguidor()
    {
        return $this->hasMany(\App\Models\Siguen::class, 'id', 'id_seguidor');
    }

}
