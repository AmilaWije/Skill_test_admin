<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zone\Zone;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'z_code'
    ];

    public function zoneData()
    {
        return $this->belongsTo(Zone::class, 'z_code');
    }
}
