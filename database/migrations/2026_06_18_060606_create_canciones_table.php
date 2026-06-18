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
        Schema::create('canciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('numero_pista')->nullable();
            $table->foreignId('id_album')->constrained('albumes')->cascadeOnDelete();
            $table->foreignId('id_artista')->constrained('artistas')->cascadeOnDelete();
            $table->string('nombre_cancion');
            $table->string('portada_cancion')->nullable();
            $table->string('path_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canciones');
    }
};
