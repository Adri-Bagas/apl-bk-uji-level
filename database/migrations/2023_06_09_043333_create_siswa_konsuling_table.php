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
        Schema::create('siswa_konsuling', function (Blueprint $table) {
            $table->foreignId('siswa_id')->constrained('siswas');
            $table->foreignId('konsuling_b_k_id')->constrained('konsuling_b_k_s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_konsuling');
    }
};
