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
            $table->text('keterangan')->after('id');
            $table->boolean('isAllStudent')->after('isMultiChild');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layanan_b_k_s', function (Blueprint $table) {
            $table->dropColumn('isAllStudent');
            $table->dropColumn('keterangan');
        });
    }
};
