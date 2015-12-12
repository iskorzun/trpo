<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function info()
    {
        return $this->belongsTo(ProductInfo::class, 'product_info_id', 'id');
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
