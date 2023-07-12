<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembersihan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'gambar_tempat_pembersihan','nama_lokasi','alamat','titik_koordinat','harga',
    ];
}
