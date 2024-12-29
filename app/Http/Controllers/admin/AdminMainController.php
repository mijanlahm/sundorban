<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageSetting;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function admin_setting(){
        $products = Product::all();
        $homepagesetting = HomePageSetting::first() ?? new HomePageSetting();
        return view('admin.admin_setting', compact('products', 'homepagesetting'));
    }

    public function update_homepage_setting( Request $request){
        $request->validate([
            
            'discounted_product_id' => 'required|exists:products,id',
            'discounted_percent' => 'required|numeric|min:0',
            'discount_heading' => 'required|string|max:255',
            'discount_sub_heading' => 'required|string|max:255',
            'featured_product_1_id' => 'nullable|exists:products,id',
            'featured_product_2_id' => 'nullable|exists:products,id',
            
        ]);

        $homepagesetting = HomePageSetting::first() ?? new HomePageSetting();
        $homepagesetting -> fill($request->all());
        $homepagesetting -> save();

        return redirect()->route('adminSetting')->with('success', 'Homepage Setting Updated successfully!');
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
