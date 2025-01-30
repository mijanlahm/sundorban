<?php

namespace App\Livewire;

use App\Models\cart_items;
use App\Models\Carts;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('home.layouts.layoutsLivewire')]

class Cart extends Component
{   
    public $cart;
    public $cartItems = [];

    public function mount()
    {
        // Retrieve the logged-in user's active cart, or create a new one if it doesn't exist.
        $this->cart = Carts::firstOrCreate(
            ['user_id' => Auth::id(), 'status' => 'active'],
            ['status' => 'active']
        );

        // Load the cart items
        $this->cartItems = $this->cart->items;
    }

    // Increase quantity of the cart item
    public function increaseQuantity($cartItemId)
    {
        $cartItem = cart_items::find($cartItemId);
        $cartItem->quantity += 1;
        $cartItem->save();

        $this->updateCart();
    }

    // Decrease quantity of the cart item
    public function decreaseQuantity($cartItemId)
    {
        $cartItem = cart_items::find($cartItemId);
        
        if ($cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
            $cartItem->save();
        }

        $this->updateCart();
    }

    // Remove item from the cart
    public function removeFromCart($cartItemId)
    {
        cart_items::find($cartItemId)->delete();

        $this->updateCart();
    }

    // Update the cart's total price after changes
    public function updateCart()
    {
        $this->cartItems = $this->cart->items;
        $this->cart->total_price = $this->cart->totalPrice();  // Recalculate the total price
        $this->cart->save();
    }

    public function render()
    {
        return view('livewire.cart', [
            'cartItems' => $this->cartItems,
            'totalPrice' => $this->cart->totalPrice()
        ]);
    }
}
