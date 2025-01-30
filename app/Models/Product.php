<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'sku',
        'seller_id',
        'category_id',
        'subcategory_id',
        'store_id',
        'regular_price',
        'discounted_price',
        'tax_rate',
        'stock_quantity',
        'stock_status',
        'slug',
        'visibility',
        'meta_title',
        'meta_description',
        'status'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function subcategoryid(){
        return $this->belongsTo(SubCategory::class,'subcategory_id');
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function seller(){
        return $this->belongsTo(User::class);
    }

    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function firstImage()
    {
        return $this->productImages()->first(); // Fetch the first image
    }

    public function cartItems()
    {
        return $this->hasMany(cart_items::class);
    }

    public function orderItems()
    {
        return $this->hasMany(order_items::class);
    }
    

    

}
