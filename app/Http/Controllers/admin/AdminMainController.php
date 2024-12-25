<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function admin_setting(){
        $products = Product::all();
        return view('admin.admin_setting', compact('products'));
    }

    public function manage_users(){
        return view('admin.manage.manage_user');
    }

    public function manage_stores(){
        return view('admin.manage.manage_store');
    }

    public function cart_history(){
        return view('admin.cart.cart_history');
    }

    public function order_history(){
        return view('admin.order.order_history');
    }
}
