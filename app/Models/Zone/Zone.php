<?php

namespace App\Models\Zone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'long_des',
        'short_des'
    ];
}
