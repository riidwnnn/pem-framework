<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aktivitas extends Model
{
    protected $table = 'aktivitas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_aktivitas',
        'deskripsi',
        'tanggal',
        'status',
    ];
}
