<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price_at_checkout'];

    public function order()
    {
        return $this->belongsTo(orders::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
