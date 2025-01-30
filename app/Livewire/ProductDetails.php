<?php

namespace App\Livewire;

use App\Models\cart_items;
use App\Models\Carts;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('home.layouts.layoutsLivewire')]

class ProductDetails extends Component
{
    public $product; // Product being viewed
    public $quantity = 1; // Default quantity for adding to cart
    public $cart; // The current active cart for the user
    public $currentProductId;

    // Mount method to initialize product and cart
    public function mount($productId)
    {
        // Retrieve the product by ID
        $this->product = Product::find($productId);

        $this->currentProductId = $productId;

        // If product is not found, return a 404 error
        if (!$this->product) {
            abort(404, 'Product not found');
        }


        // Check if the user is authenticated
        if (Auth::check()) {
                // Retrieve or create the user's active cart
                $this->cart = Carts::firstOrCreate(
                    ['user_id' => Auth::id(), 'status' => 'active'],
                    ['status' => 'active']
                );
            } 

    }

    // Add product to the cart
    public function addToCart()
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }

        // Check if the product is already in the cart
        $cartItem = cart_items::where('cart_id', $this->cart->id)
                            ->where('product_id', $this->product->id)
                            ->first();

        if ($cartItem) {
            // If the product is already in the cart, update the quantity
            $cartItem->quantity += $this->quantity;
            $cartItem->save();
        } else {
            // Otherwise, create a new cart item
            cart_items::create([
                'cart_id' => $this->cart->id,
                'product_id' => $this->product->id,
                'quantity' => $this->quantity,
                'price_at_checkout' => $this->product->discounted_price,
            ]);
        }

        // Update the cart's total price
        $this->cart->total_price = $this->cart->cartItems->sum(function ($item) {
            return $item->quantity * $item->price_at_checkout;
        });
        $this->cart->save();

        session()->flash('success', 'Product added to the cart!');
    }

    // Increase product quantity
    public function increaseQuantity()
    {
        $this->quantity++;
    }

    // Decrease product quantity
    public function decreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function render()
    {
        // Fetch the current product
        $currentProduct = Product::find($this->currentProductId);

        $relatedProducts = Product::where('category_id', $currentProduct->category_id)
        ->where('subcategory_id', $currentProduct->subcategory_id)
        ->where('id', '!=', $currentProduct->id) // Exclude the current product
        ->take(12) // Limit to 4 related products
        ->get();

        return view('livewire.product-details', [
            'relatedProducts' => $relatedProducts
        ]);
    }
}
