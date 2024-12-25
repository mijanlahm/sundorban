<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function manage_product(){
        return view('admin.product.manage_product');
    }

    public function manage_product_review(){
        return view('admin.product.manage_product_review');
    }
}
