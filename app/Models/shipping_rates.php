<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shipping_rates extends Model
{
    protected $fillable = ['region', 'price'];
}
