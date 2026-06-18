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
        Schema::create('cancion_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cancion')->constrained('canciones')->cascadeOnDelete();
            $table->foreignId('id_tag')->constrained('tags')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['id_cancion', 'id_tag']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancion_tags');
    }
};
