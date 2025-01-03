<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->string('aktivitas');
            $table->date('tanggal');
            $table->text('deskripsi')->nullable();
            $table->foreignId('transaksi_id')->nullable()->constrained('transaksis')->onDelete('cascade');
            $table->foreignId('stok_id')->nullable()->constrained('stoks')->onDelete('cascade');
            $table->timestamps();
        });
        
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
