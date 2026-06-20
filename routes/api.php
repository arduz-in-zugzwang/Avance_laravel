<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtistaController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\PaiseController;
use App\Http\Controllers\Api\AlbumeController;
use App\Http\Controllers\Api\CancioneController;
use App\Http\Controllers\Api\PlaylistController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\LetraController;
use App\Http\Controllers\Api\ComentariosArtistaController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CancionTagController;
use App\Http\Controllers\Api\EscuchanController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\PlaylistCancioneController;
use App\Http\Controllers\Api\SiguenController;


Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('artistas', ArtistaController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('paises', PaiseController::class);
Route::apiResource('albunes', AlbumeController::class);
Route::apiResource('canciones', CancioneController::class);
Route::apiResource('playlists', PlaylistController::class);
Route::apiResource('tags', TagController::class);
Route::apiResource('letras', LetraController::class);
Route::apiResource('comentarios-artista', ComentariosArtistaController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('cancion-tag', CancionTagController::class);
Route::apiResource('escuchans', EscuchanController::class);
Route::apiResource('likes', LikeController::class);
Route::apiResource('playlist-canciones', PlaylistCancioneController::class);
Route::apiResource('siguens', SiguenController::class);
