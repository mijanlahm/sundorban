<div>
    
    <div class="row my-5">
          
        <div class="col-lg-8">
          <h2 class="mb-3">
            My basket
          </h2>

          <div>
            
            <div class="addtocartheading">
              <h5>Sold by Mijan Ltd</h5>
            </div>

            @if ($cart && $cart->items->count() > 0)
      
            @foreach ($cart->items as $item)
        
            <div class="addtocartbody p-3">
                        
                <div class="cart-card">
                    <div class="addtocatimg">
                        
                        @if($item->product->images->first())
                          <img src="{{ asset('storage/' . $item->product->images->first()->image_path ?? 'default.jpg' ) }}" alt="{{ $item->product->product_name }}"> 
                        @else
                            <p>No image available.</p>
                        @endif
                        

                    </div>
        
                    <div class="cartproname clearfix">
                      <h6>{{ $item->product->product_name }}</h6>
                    </div>

                    <div class="pricesec">

                        <div class="cartproperprice">
                            <h6>Price</h6>
                            <h4>${{ number_format($item->price_at_checkout, 2) }}</h4>
                              
                        </div>

                        <div class="proquatitybtn cartquatitybtn my-3">
                            <div class="qntytndiv">
                                <p>Quantity</p>
                                <div class="qntydiv clearfix">
                                    <button class="btn btn-danger qntybtnin" wire:click="updateQuantity({{ $item->id }}, {{ $item->quantity - 1 }})"><h4>-</h4></button>
                                    <span style="margin-left: 55px;font-size: 21px;">{{ $item->quantity }}</span>
                                    <button class="btn btn-success qntybtnde" wire:click="updateQuantity({{ $item->id }}, {{ $item->quantity + 1 }})"><h4>+</h4></button>
                                </div>
                                
                            </div>
                
                            <div class="cartremovebtn">
                                <button wire:click="removeItem({{ $item->id }})" class="btn btn-warning">Remove</button>
                            </div>
                        </div>

                        <div class="cartproprice">
                           
                            <h6 style="margin-left: 69px;">Total</h6>
                            <h4>${{ number_format($item->quantity * $item->price_at_checkout, 2) }}</h4>
                              
                        </div>

                    </div>
        
                    
                </div>
        
                
        
            </div>

            @endforeach


          </div>



          

          <div class="subtotaldiv">
            <div class="addtocartheading">
              <h5>Total</h5>
            </div>

            <div class="addtocartbody p-3">
              
              <div class="cart-card">
                <div class="subamount">
                  <div class="subamountheading"><h5>Subtotal:</h5></div>
                  <div class="subamoutprice"><h5>${{ number_format($cart->total_price, 2) }}</h5></div>
              </div>

              <div class="subamount">
                <div class="deliveryheading"><h6>Delivery:</h6></div>
                <div class="deliveryprice">Delivery charges will be added at checkout (if applicable)</div>
              </div>

              <div class="subamount">
                <div class="totalamheading"><h3>Grand Total:</h3></div>
                <div class="totalamprice"><h3>${{ number_format($cart->total_price, 2) }}</h3></div>
              </div>

              <div class="subcheckbtn">
                <a href="{{ route('deliveryOption.show') }}"><button class="btn btn-primary chkbtn">Go to checkout</button></a>
              </div>    

                  
              </div>

            </div>

          </div>

          

          
        </div>

        <div class="col-lg-4">

          
          <div class="checkbtndiv">
            <a href="{{ route('deliveryOption.show') }}">
              <button class="btn btn-primary checkoutbtn">
                Go to checkout
              </button>
            </a>
          </div>

          <div class="ordersummary p-3">
            <div class="mb-3">
              <h3>Order summary</h3>
            </div>

            <div class="subtotal clearfix">
              <div class="subheading"><h6>Subtotal</h6></div>
              <div class="subheading-price"><h6>${{ number_format($cart->total_price, 2) }}</h6></div>
            </div>

            <div class="deliveryfee">
              <h6>Delivery</h6>
              <p>Delivery charges will be added at checkout (if applicable).</p>
            </div>

            <div class="total my-3 clearfix">
              <div class="totalheading"><h4>Grand Total</h4></div>
              <div class="total-price"><h4>${{ number_format($cart->total_price, 2) }}</h4></div>
            </div>

            <a href="{{ route('deliveryOption.show') }}">
              <button class="btn btn-primary checkoutbtn">
                Go to checkout
              </button>
            </a>

            <div class="stripelogo">
              <img src="{{ asset('home/img/stripe.png') }}" alt="">
            </div>

            <div class="my-3 personaldetail">
              <h6>Your personal details are protected.</h6>
              <p><a href="">Learn More</a></p>
            </div>

            <div class="my-3 personaldetail">
              <h6>Helping you to buy</h6>
              <p>Customer support team - 663547459</p>
            </div>

        </div>

      </div>
      </div>

        @else
        <p>Your cart is empty.</p>
        @endif

</div>

    






    