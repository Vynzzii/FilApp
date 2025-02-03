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
        Schema::create('laporan_magangs', function (Blueprint $table) {
            $table->id();
            $table->string('hari_tanggal_laporan');
            $table->text('deskripsi_laporan');
            $table->decimal('pengeluaran_tiap_hari', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_magangs');
    }
};
