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
        Schema::create('siguens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_seguidor')->constrained('users')->cascadeOnDelete();
            $table->foreignId('id_seguido')->constrained('users')->cascadeOnDelete();
            $table->timestamp('fecha_follow')->nullable();
            $table->timestamps();

            $table->unique(['id_seguidor', 'id_seguido']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siguens');
    }
};
