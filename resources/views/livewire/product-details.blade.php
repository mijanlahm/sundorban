<div>

    
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <p class="breadcrumb-title">Home > Shoe > <span>Quip Sports X19</span></p>
          </div>
        </div>
      </div>
    
      
        <!-- details card -->
        <section class="detailsproducts-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="details-card">
                  <div class="row align-items-center">
                    <!-- slider -->
                    <div class="col-lg-6 col-md-12 col-sm-12  mb-5 mb-lg-0">
                      
                    
                            <div class="xzoom-container">
    
                              <div class="xzoomimgdiv">
                                <img class="xzoom xzoomimg" id="xzoom-default" src="{{ asset('storage/' . $product->product_images->first()->image_path ?? 'placeholder.jpg') }}" xoriginal="{{ asset('storage/' . $product->product_images->first()->image_path ?? 'placeholder.jpg') }}" alt="">
                              </div>
                              
                              
                              <div class="xzoom-thumbs xzoomthubmargin">
                  
                                @foreach ($product->product_images as $image)
                                    <a href="{{ asset('storage/' . $image->image_path) }}"><img class="xzoom-gallery" width="80" src="{{ asset('storage/' . $image->image_path) }}" xpreview="{{ asset('storage/' . $image->image_path) }}" title="The description goes here"></a>
                                @endforeach
                                            
                              </div>
    
                            </div>  
    
                    </div>
    
    
    
                    <!-- details text -->
                    <div class="col-lg-6">
    
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @elseif(session()->has('message'))
                            <div class="alert alert-warning">
                                {{ session('message') }}
                            </div>
                        @endif
    
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
                            <button class="btn btn-danger qntybtnin" wire:click="decreaseQuantity"><h4>-</h4></button>
                            <input type="text" id="quantity" wire:model="quantity"  class="form-control qntyinput" name="product_quantity">
                            <button class="btn btn-success qntybtnde" wire:click="increaseQuantity"><h4>+</h4></button>
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
    
                    <div class="col-lg-12 relmargin related-Product-section">
    
                        <div class="divheadingrecommened">
                          <h2>Products related to this item</h2>
                        </div>
          
                        <div class="owl-carousel related-carousel owl-theme owl-carousel-custom">
                          
                          @foreach ($relatedProducts as $related)
    
                          <div class="recommend-card item recommeneddiv">
                            <!-- image -->
                            <div class="recommend-img">
                              <a href="{{ route('product.details', $related->id) }}">
                                <img src="{{ asset('storage/' . $related->product_images->first()->image_path) }}" alt="{{ $related->product_name }}">
                                
                              </a>
                            </div>
                            
                            <div class="cardproductname">
                              <a href="{{ route('product.details', $related->id) }}">
                                <h6 class="fw-semibold mb-2">{{ $related->product_name }}</h6>
                              </a>
                            </div>
                            
                            <div class="star">
                              <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                              <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                              <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                              <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                              <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                            </div>
                            
                            <div class="cardprice">
                              <h4 class="mb-2 price">${{ number_format($related->discounted_price, 2) }}</h4>
                            </div>
                            
          
                            <div class="collection">
                              <div class="delivery">
                                <i class="fa-solid fa-check" style="color: #12c58f; float: left;"></i> 
                                <p style="float: left;">Available for Home Delivery</p>
                              </div>
          
                              <div class="delivery">
                                <i class="fa-solid fa-check" style="color: #12c58f; float: left;"></i>
                                <p style="float: left;">Available for Collect from Store</p>
                              </div>
                            </div>
          
                            <!-- add to cart -->
                            <div class="addtocartdiv">
                              <a class="addtocartbtn" href="">Add to Cart</a>
                            </div>
          
                          </div>
          
                          @endforeach
    
    
                        </div>
          
                    
    
                    </div>
    
                    
                    
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </section>
    
        
    
    
        <!-- tab card -->
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="tab-card">
                  <ul class="nav mb-4 border-bottom border-2" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-desc" type="button" role="tab" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-review"
                        type="button" role="tab" aria-selected="false">Customer
                        Review(0)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-seller"
                        type="button" role="tab" aria-selected="false">Seller Info</button>
                    </li>
                  </ul>
    
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" tabindex="0">Home: Lorem ipsum
                      dolor sit amet, consectetur
                      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                      irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                      est laborum</div>
                    <div class="tab-pane fade" id="pills-review" role="tabpanel" tabindex="0">Review: Lorem ipsum dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                      voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                    <div class="tab-pane fade" id="pills-seller" role="tabpanel" tabindex="0">Seller Info: Lorem ipsum
                      dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                      voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    

    
    
</div>

<!-- Styling -->


