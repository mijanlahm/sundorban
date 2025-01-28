<?php

namespace App\Livewire;

use App\Models\cart_items;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Cart extends Component
{   
    public $cart;

    protected $listeners = ['cartUpdated' => 'loadCart'];

    public function mount()
    {
        $this->loadCart();
    }
    
    public function loadCart()
    {

        $this->cart = Carts::with('items.product.images')->where(function ($query) {
            $query->where('user_id', Auth::id())
                ->orWhere('session_id', session()->getId());
        })->first();
    }

    public function updateQuantity($cartItemId, $quantity)
    {
        $cartItem = cart_items::findOrFail($cartItemId);

        if ($quantity > 0 && $quantity <= $cartItem->product->stock_quantity) {
            $cartItem->quantity = $quantity;
            $cartItem->save();

            $this->updateCartTotal();
        }

        $this->loadCart();
    }

    public function removeItem($cartItemId)
    {
        $cartItem = cart_items::findOrFail($cartItemId);
        $cartItem->delete();

        $this->updateCartTotal();
        $this->loadCart();
    }

    public function updateCartTotal()
    {
        if ($this->cart) {
            $this->cart->total_price = $this->cart->items->sum(fn ($item) => $item->quantity * $item->price_at_checkout);
            $this->cart->save();
        }
    }


    public function render()
    {
        return view('livewire.cart');
    }
}
