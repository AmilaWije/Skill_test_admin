<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Territory\Territory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nic',
        'address',
        'mobile',
        'email',
        'gender',
        't_id',
        'username',
        'password'
    ];

    public function territoryDate()
    {
        return $this->belongsTo(Territory::class, 't_id');
    }
}
