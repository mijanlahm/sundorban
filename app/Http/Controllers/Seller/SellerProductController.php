<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SellerProductController extends Controller
{
    public function vendor_product_create(){
        $authUserId = Auth::id();
        $stores = Store::where('user_id', $authUserId)->get();
        return view('Seller.product.create_product', compact ('stores'));
    }

    public function vendor_product_manage(){
        $authUserId = Auth::id();
        $allProducts = Product::where('seller_id', $authUserId)->get();
        return view('Seller.product.manage_product', compact('allProducts'));
    }

    public function vendor_product_publish(Request $request){
         $request->validate([

            'product_name' => 'required|string|max:225',
            'description' => 'nullable|string',
            'sku' => 'required|string|unique:products,sku,',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:sub_categories,id',
            'store_id' => 'required|exists:stores,id',
            'regular_price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0',
            'tax_rate' => 'required|numeric|min:0|max:100',
            'stock_quantity' => 'required|integer|min:0',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $product = Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'sku' => $request->sku,
            'seller_id'=> Auth::id(),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'store_id' => $request->store_id,
            'regular_price' => $request->regular_price,
            'discounted_price' => $request->discounted_price,
            'tax_rate' => $request->tax_rate,
            'stock_quantity' => $request->stock_quantity,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        if($request->hasFile('images')){
            foreach ($request->file('images') as $image) {
                $path = $image->store('product_images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                    'is_primary' => false,
                ]);
            }
        }
        
        return redirect()->Route('vendorProductManage')->with('success', 'Product Added successfully!');
    }

    public function show_vendor_product($id){
        $authUserId = Auth::id();
        $stores = Store::where('user_id', $authUserId)->get();
        $productInfo = Product::find($id);
        $productCurrentImage = Product::with('product_images')->findOrFail($id);
        return view('Seller.product.edit_product', compact('productInfo', 'stores', 'productCurrentImage'));
    }


    public function update_vendor_product(Request $request, $id){
        $product = Product::find($id);
        $request->validate([
            'product_name' => 'required|string|max:225',
            'description' => 'nullable|string',
            'sku' => ['required','string', Rule::unique('products', 'sku')->ignore($product->id),],
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:sub_categories,id',
            'store_id' => 'required|exists:stores,id',
            'regular_price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0',
            'tax_rate' => 'required|numeric|min:0|max:100',
            'stock_quantity' => 'required|integer|min:0',
            'slug' => ['required','string', Rule::unique('products', 'slug')->ignore($product->id),],
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $product->update([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'sku' => $request->sku,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'store_id' => $request->store_id,
            'regular_price' => $request->regular_price,
            'discounted_price' => $request->discounted_price,
            'tax_rate' => $request->tax_rate,
            'stock_quantity' => $request->stock_quantity,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        if ($request->hasFile('images')) {
            // First delete existing images from storage
            $product->product_images->each(function ($product_images) {
                Storage::disk('public')->delete($product_images->image_path);
                $product_images->delete();
            });

        // Store new images
        foreach ($request->file('images') as $image) {
                $path = $image->store('product_images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                    'is_primary' => false,
                ]);
            }
        }

        return redirect()->route('vendorProductManage')->with('success', 'Product image Updated successfully!');
    }

    public function delete_vendor_product($id){
        Product::findOrFail($id)->delete();
        return redirect()->route('vendorProductManage')->with('success', 'Product Deleted successfully!');
    }
}
