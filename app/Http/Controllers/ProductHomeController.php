<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductHomeController extends Controller
{
    public function product_show($slug)
    {
        // Fetch the product by slug with the related store
        $product = Product::with(['store', 'product_images'])->where('slug', $slug)->firstOrFail();

        // Pass the product to the view
        return view('home.productShow', compact('product'));
    }

}
