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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('id_pais')->nullable()->after('name')->constrained('paises')->nullOnDelete();
            $table->foreignId('id_rol')->nullable()->after('id_pais')->constrained('roles')->nullOnDelete();
            $table->string('pfp')->nullable()->after('password');
            $table->text('bio')->nullable()->after('pfp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('id_pais');
            $table->dropConstrainedForeignId('id_rol');
            $table->dropColumn(['pfp', 'bio']);
        });
    }
};
