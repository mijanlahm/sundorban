<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image_path',
        'is_primary'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function productid(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
