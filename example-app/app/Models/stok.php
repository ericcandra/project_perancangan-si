<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'kualitas',
        'batas_stok',
    ];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'stok_id');
    }
}
