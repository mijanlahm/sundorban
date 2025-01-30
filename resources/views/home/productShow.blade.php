@extends('home.layouts.layoutsHome')
@section('home')

  <!-- breadcrumb -->
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


                <livewire:product-quantity :product-id="$product->id" />

                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif


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
                          <a href="{{ route('product.show', $related->slug) }}">
                            <img src="{{ asset('storage/' . $related->product_images->first()->image_path) }}" alt="{{ $related->product_name }}">
                            
                          </a>
                        </div>
                        
                        <div class="cardproductname">
                          <a href="{{ route('product.show', $related->slug) }}">
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
                          <a class="addtocartbtn" href="{{ route('addtocart') }}">Add to Cart</a>
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

    

@endsection