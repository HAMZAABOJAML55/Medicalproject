<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Pharmacy extends Authenticatable implements JWTSubject
{
    protected $table = 'pharmacies';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function pharmacyProducts()
    {
        return $this->hasMany(PharmacyProduct::class, 'pharmacy_id');
    }
    public function rates()
    {
        return $this->hasMany(Rate::class, 'pharmacy_id');
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'pharmacy_id');
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
