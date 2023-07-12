<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nama_penjual','alamat_penjual','no_hp','berat_sampah','jenis_pembayaran','nomor_pembayaran',
    ];
}
