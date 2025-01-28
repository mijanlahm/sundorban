<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class SubCategory extends Model
{
    protected $fillable = [
        'subcategory_name',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function categoryid(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class,'subcategory_id');
    }

    

    
}
