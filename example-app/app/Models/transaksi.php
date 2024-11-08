<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal_transaksi','jumlah_total'];
    // public function buku(){
    //     return $this->belongsTo(buku::class);

    // }
    
};