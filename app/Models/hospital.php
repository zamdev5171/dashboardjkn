<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use HasFactory;
    protected $fillable = [
        'lokasi',
        'bilangan',
        'isi',
        'kosong',
    ];
}
