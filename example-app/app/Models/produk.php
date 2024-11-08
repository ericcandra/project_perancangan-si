<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','jenis','batas_stok'];
    // public function buku(){
    //     return $this->belongsTo(buku::class);

    // }
    
};