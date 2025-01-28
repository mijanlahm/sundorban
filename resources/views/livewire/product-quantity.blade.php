<div>
    <h1 class="fw-bold mb-4">{{ $product->product_name }}</h1>

    <!-- ratings & shop name -->
    <div class="flex flex-wrap align-items-center gap-3 mb-4">
    <div class="stars-wrap">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
    </div>



    <p class="fw-semibold">
        <span class="pl-3 border-start border-secondary border-3">SKU:</span>
        {{ $product->sku }}
    </p>
    </div>

    <p class="mb-3 fw-semibold">
    <span class="text-secondary">By - </span>
    {{ $product->store->store_name ?? 'No store available' }}
    </p>

    <!-- price -->
    <div class="flex flex-wrap align-items-center gap-3 mb-4">
    <h2 class="price">${{ $product->discounted_price  }}</h2>
    <p class="line-through">${{ $product->regular_price }}</p>
    </div>

    <!-- add to cart -->
    <div class="proaddtocart">

    <div class="proquatitybtn">
        <h5>Quantity</h5>
        <div class="qntydiv">
        <button class="btn btn-danger qntybtnin" wire:click="decrement"><h4>-</h4></button>
        <input type="text" id="quantity" wire:model="quantity"  class="form-control qntyinput" name="product_quantity">
        <button class="btn btn-success qntybtnde" wire:click="increment"><h4>+</h4></button>
        </div>
        
    </div>

    <div class="d-grid gap-2 col-6 mx-auto proaddtocartbtn">
        
        
        
    <button wire:click="addToCart" class="btn btn-primary" type="submit"><h4>Add to Cart</h4></button>

    @if (session()->has('message'))
        <span class="text-green-500 ml-4">{{ session('message') }}</span>
    @endif 
        
    </div>

    </div>


    <!-- payment -->
    <div
    class="flex flex-wrap flex-sm-nowrap gap-3 border border-2 border-dark-subtle rounded py-4 px-3 mb-4">
    <i class="fa-solid fa-credit-card mt-1 fs-3"></i>
    <p style="text-wrap: auto;"><span class="fw-bold">Payment:</span> Payment upon receipt of goods,
        Payment by card in the department, Google Pay, Online card, -5% discount in case of payment</p>
    </div>

    <!-- buttons -->
    <div class="flex flex-wrap align-items-center gap-3">
    <a class="btn-outline" href="#!">
        <i class="fa-solid fa-heart"></i>
        <span>Add To Favourite</span>
    </a>

    <a class="btn-outline" href="#!">
        <i class="fa-solid fa-code-compare"></i>
        <span>Compare Now</span>
    </a>
    </div>

    
</div>
