<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    protected $fillable = ['order_id', 'payment_method', 'stripe_payment_id', 'status', 'payment_reference', 'amount'];

    public function order()
    {
        return $this->belongsTo(orders::class);
    }
}
