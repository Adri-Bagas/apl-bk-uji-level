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
        Schema::create('konsuling_b_k_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Layanan_BK_id')->constrained('layanan_b_k_s');
            $table->foreignId('bk_id')->constrained('gurus', 'id');
            $table->date('tanggal_konseling');
            $table->time('waktu_konseling')->nullable();
            $table->foreignId('tempat_id')->constrained('tempats');
            $table->string('ket')->nullable();
            $table->string('hasil Konseling')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsuling_b_k_s');
    }
};
