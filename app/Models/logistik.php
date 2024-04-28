<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logistik extends Model
{
    use HasFactory;
    protected $fillable = [
        'logistik',
        'bilangan',
    ];
}
