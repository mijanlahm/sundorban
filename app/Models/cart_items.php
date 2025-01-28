<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart_items extends Model
{
    protected $fillable = ['cart_id', 'product_id', 'quantity', 'price_at_checkout'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cart()
    {
        return $this->belongsTo(Carts::class, 'cart_id');
    }
}
