<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stok_id')
                  ->constrained('stoks') // Referensi ke tabel `stoks`
                  ->onDelete('cascade') // Hapus data terkait jika stok dihapus
                  ->onUpdate('cascade'); // Update data terkait jika stok diperbarui
            $table->date('tanggal_transaksi');
            $table->integer('jumlah_total'); 
            $table->decimal('harga', 15, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
