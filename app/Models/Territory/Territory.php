<?php

namespace App\Models\Territory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zone\Zone;
use App\Models\Region\Region;

class Territory extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'z_code',
        'r_code'
    ];

    public function zoneDate()
    {
        return $this->belongsTo(Zone::class, 'z_code');
    }

    public function regionData()
    {
        return $this->belongsTo(Region::class, 'r_code');
    }
}
