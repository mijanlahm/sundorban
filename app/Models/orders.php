<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = ['user_id', 'delivery_type', 'store_id', 'shipping_address', 'total_price', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clickCollect_store()
    {
        return $this->belongsTo(clickCollect_store::class);
    }

    public function items()
    {
        return $this->hasMany(order_items::class);
    }

    public function payment()
    {
        return $this->hasOne(payments::class);
    }
}
