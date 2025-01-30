<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clickCollect_store extends Model
{
    protected $fillable = ['name', 'address', 'contact_number', 'opening_time'];

    public function orders()
    {
        return $this->hasMany(orders::class);
    }
}
