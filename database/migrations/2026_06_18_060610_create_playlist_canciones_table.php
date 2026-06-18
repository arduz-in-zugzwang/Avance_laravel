<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('playlist_canciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_playlist')->constrained('playlists')->cascadeOnDelete();
            $table->foreignId('id_cancion')->constrained('canciones')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['id_playlist', 'id_cancion']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist_canciones');
    }
};
