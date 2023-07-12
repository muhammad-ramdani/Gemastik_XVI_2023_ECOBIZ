<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prosespembersihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user','pembersihan','before','after','jenis_bayar','no_bayar','status',
    ];
}
