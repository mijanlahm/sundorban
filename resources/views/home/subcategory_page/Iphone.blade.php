@extends('home.layouts.layoutsHome')
@section('home')

      @if($iphoneSubcategory && $iphoneSubcategory->subcategoriesid->isNotEmpty())
      
          @foreach($iphoneSubcategory->subcategoriesid as $subcategory)
              
                  <h3 class="Subacatheading">{{ $subcategory->subcategory_name }}</h3>

                  

    <!-- product filter -->
    <section class="sectionmargin">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12 d-block d-lg-none">
            <a class="filter-btn" href="#!">
              <span>Filters</span>
              <i class="fa-solid fa-sliders"></i>
            </a>
          </div>

          <!-- filters -->
          <div class="col-lg-3 filters-wrap">

            <a class="d-block d-lg-none filter-close" href="#!">
              <i class="fa-regular fa-rectangle-xmark"></i>
            </a>

            <!-- category -->
            <div class="filter-card">
              <h5 class="mb-3">Product Category</h5>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="accessories">
                <label class="form-check-label" for="accessories">
                  Accessories
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="beauty">
                <label class="form-check-label" for="beauty">
                  Beauty
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="electronics">
                <label class="form-check-label" for="electronics">
                  Electronics
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="fashion">
                <label class="form-check-label" for="fashion">
                  Fashion
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="kids">
                <label class="form-check-label" for="kids">
                  Kids
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="shoe">
                <label class="form-check-label" for="shoe">
                  Shoes
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="sports">
                <label class="form-check-label" for="sports">
                  Sports
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="watches">
                <label class="form-check-label" for="watches">
                  Watches
                </label>
              </div>
            </div>

            <!-- price range -->
            <div class="filter-card">
              <h5 class="mb-3">Price Filter</h5>

              <!-- range -->
              <input type="range" class="form-range mb-2" id="">

              <!-- button -->
              <div class="flex flex-wrap align-items-center justify-content-between gap-3">
                <a class="btn-sm" href="#!">Filter</a>

                <p>Price: $0 - $1,040</p>
              </div>
            </div>

            <!-- product status -->
            <div class="filter-card">
              <h5 class="mb-3">Product Status</h5>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="in-stock">
                <label class="form-check-label" for="in-stock">
                  In Stock
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="on-sale">
                <label class="form-check-label" for="on-sale">
                  On Sale
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="discontinued">
                <label class="form-check-label" for="discontinued">
                  Discontinued
                </label>
              </div>
            </div>

            <!-- By Shop -->
            <div class="filter-card">
              <h5 class="mb-3">Product Status</h5>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                  Asib's Shop
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                  Shakib's Shop
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                  XYZ Shop
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                  Asib's Shop
                </label>
              </div>

              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                  Shakib's Shop
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                  XYZ Shop
                </label>
              </div>
            </div>
          </div>

          <!-- products -->
          <div class="col-lg-9 mb-5">
            <div class="row">

              @if($subcategory->products->isNotEmpty())
                      
              @foreach($subcategory->products as $product)
      
              <div class="col-lg-4 col-md-6">
                <div class="recommend-card item recommeneddiv">
                  <!-- image -->
                  <div class="recommend-img">
                    

                    <a href="{{ route('product.details', $product->id) }}">

                      @if($product->firstImage())
                          <img src="{{ asset('storage/' . $product->firstImage()->image_path) }}" alt="{{ $product->product_name }}" >
                      @else
                          <p>No image available.</p>
                      @endif

                    </a>


                  </div>

                  <div class="textpadding">
                    <div class="cardproductname">

                      <a href="{{ route('product.details', $product->id) }}">
                        <h6 class="fw-semibold mb-2">{{ $product->product_name }}</h6>
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
                      <h4 class="mb-2 price">${{ number_format($product->discounted_price, 2) }}</h4>
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
                  </div>
                  

                  <!-- add to cart -->
                  <div class="addtocartdivcat">
                    <a class="addtocartbtn" href="#!">Add to Cart</a>
                  </div>

                </div>
              </div>

              @endforeach
                      
              @else
                  <p>No products available in this Category</p>
              @endif

           

            </div>
          </div>
        </div>
      </div>
    </section>


      
      @endforeach
    
      @else
      <p>No Iphone found under Mobile Phone.</p>
      @endif

    

    
    

@endsection