<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alat extends Model
{
    use HasFactory;
    protected $fillable = [
        'alat',
        'bilangan',
    ];
        
}
