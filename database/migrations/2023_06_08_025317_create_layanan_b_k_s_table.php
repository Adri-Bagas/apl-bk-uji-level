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
        Schema::create('layanan_b_k_s', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_layanan');
            $table->boolean('isMultiChild');
            $table->boolean('isCareerOriented');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_b_k_s');
    }
};
