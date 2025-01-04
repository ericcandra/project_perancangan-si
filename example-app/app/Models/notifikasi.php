<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'pesan',
        'dibaca',
        'transaksi_id',
        'stock_id',
    ];

    public function transaksis()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function stok()
    {
        return $this->belongsTo(Stok::class);
    }
}

