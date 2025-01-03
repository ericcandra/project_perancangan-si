<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'stok_id',
        'tanggal_transaksi',
        'jumlah_total',
        'harga',
    ];

    public function stok()
    {
        return $this->belongsTo(Stok::class, 'stok_id');
    }
}
