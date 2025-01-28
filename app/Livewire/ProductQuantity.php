<?php

namespace App\Livewire;

use App\Models\cart_items;
use App\Models\Carts;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductQuantity extends Component
{
    public $product;
    public $quantity = 1;

    public function mount($productId)
    {
        $this->product = Product::findOrFail($productId);
    }

    public function increment()
    {
        if ($this->quantity < $this->product->stock_quantity) {
            $this->quantity++;
        }
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {
        // Find or create the cart
        $cart = Carts::firstOrCreate(
            [
                'user_id' => Auth::check() ? Auth::id() : null,
                'session_id' => !Auth::check() ? session()->getId() : null,
            ]
        );

        // Find or create the cart item
        $cartItem = cart_items::firstOrCreate(
            [
                'cart_id' => $cart->id,
                'product_id' => $this->product->id,
            ],
            [
                'price_at_checkout' => $this->product->discounted_price,
                'quantity' => $this->quantity,
            ]
        );

        // If the item already exists, update the quantity
        if (!$cartItem->wasRecentlyCreated) {
            $cartItem->increment('quantity', $this->quantity);
        }

        // Update the total price in the cart
        $cart->total_price = $cart->items->sum(fn ($item) => $item->quantity * $item->price_at_checkout);
        $cart->save();

        // Notify the user
        //$this->emit('cartUpdated');
        session()->flash('message', 'Product added to cart successfully!');
    }



    public function render()
    {
        return view('livewire.product-quantity');
    }
}
