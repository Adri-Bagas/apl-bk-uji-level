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
        Schema::table('layanan_b_k_s', function (Blueprint $table) {
            $table->boolean('isAvailableToGuru')->after('isAllStudent');
            $table->boolean('isAvailableToSiswa')->after('isAllStudent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layanan_b_k_s', function (Blueprint $table) {
            $table->dropColumn('isAvailableToGuru');
            $table->dropColumn('isAvailableToSiswa');
        });
    }
};
