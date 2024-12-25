<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    public function create_product_discount(){
        return view('admin.discount.create_discount');
    }

    public function manage_product_discount(){
        return view('admin.discount.manage_discount');
    }
}
