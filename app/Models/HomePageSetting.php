<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageSetting extends Model
{
    protected $fillable = [
        'discounted_product_id',
        'discounted_percent',
        'discount_heading',
        'discount_sub_heading',
        'featured_product_1_id',
        'featured_product_2_id'
    ];

    public function featuredProduct1(){
        return $this-> belongsTo(Product::class);
    }

    public function featuredProduct2(){
        return $this-> belongsTo(Product::class);
    }
}