<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $fillable = [
        'aktivitas', 'tanggal', 'deskripsi', 'transaksi_id', 'stok_id'
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }

    public function stok()
    {
        return $this->belongsTo(Stok::class, 'stok_id');
    }
}


