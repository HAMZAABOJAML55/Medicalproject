<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyProductImage extends Model
{
    protected $table = 'pharmacy_product_images';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function pharmacyProduct()
    {
        return $this->belongsTo(PharmacyProduct::class, 'pharmacy_product_id');
    }
}
