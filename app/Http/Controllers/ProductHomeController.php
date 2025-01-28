<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductHomeController extends Controller
{
    public function product_show($slug)
    {
        
        $product = Product::with(['store', 'product_images'])->where('slug', $slug)->firstOrFail();

        // Fetch related products (excluding the current product)
        $relatedProducts = Product::where('category_id', $product->category_id)
        ->where('subcategory_id', $product->subcategory_id)
        ->where('id', '!=', $product->id) // Exclude the current product
        ->take(12) // Limit to 4 related products
        ->get();

        return view('home.productShow', compact('product', 'relatedProducts'));
    }

    public function add_to_cart()
    {
        return view('home.addtocart');
    }

    public function delivery_options()
    {
        return view('home.deliveryOptions');
    }

    public function select_store()
    {
        return view('home.selectStore');
    }

    public function secure_checkout()
    {
        return view('home.secureCheckout');
    }

    public function contact_details()
    {
        return view('home.contactDetails');
    }

    


}
