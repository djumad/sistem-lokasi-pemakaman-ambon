<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = [
        'nama_kuburan',
        'lokasi',
        'lintang',
        'bujur'
    ];
}
