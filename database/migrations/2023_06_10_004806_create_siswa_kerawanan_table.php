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
        Schema::create('siswa_kerawanan', function (Blueprint $table) {
            $table->foreignId('siswa_id')->constrained('siswas');
            $table->foreignId('jenis_kerawanan_id')->constrained('jenis_kerawanans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_kerawanan');
    }
};
