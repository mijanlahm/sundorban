<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $fillable = ['user_id', 'status', 'total_price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(cart_items::class, 'cart_id');
    }

    public function cartItems()
    {
        return $this->hasMany(cart_items::class, 'cart_id');
    }

    public function totalPrice()
    {
        return $this->items->sum(function ($item) {
            return $item->price_at_checkout * $item->quantity;
        });
    }

    public function items1()
    {
        return $this->hasMany(cart_items::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
