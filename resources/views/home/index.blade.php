@extends('layouts.user')
@section('home')

    <section id="slider" style="height: auto;">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-lg-12">
            
            <!-- .mx-product-slider -->
            <div class="mx-product-slider" data-new-image="true" data-max-width="768">
              
              <!-- item 1 -->
              <div>
                <img src="{{ asset('home/img/slide-1/slide-1.jpg') }}" data-image-src="{{ asset('home/img/slide-1/bg-768.jpg') }}" alt="img not found!">
                

                <!-- banner -->
                <div class="mx-slide-banner">
                  <a href="#">
                    <img src="{{ asset('home/img/slide-1/banner-1.png') }}" alt="img not found!" />
                  </a>
                </div>

                <!-- Related products slider -->
                <ul class="mx-related-products">
                  <li>
                    <a href="#">
                      <span class="mx-price">$7.90</span>
                      <img src="{{ asset('home/img/slide-1/product1.png') }}" alt="img not found!" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$8.40</span>
                      <img src="{{ asset('home/img/slide-1/product2.png') }}" alt="img not found!" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$5.10</span>
                      <img src="{{ asset('home/img/slide-1/product3.png') }}" alt="img not found!" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$12.30</span>
                      <img src="{{ asset('home/img/slide-1/product4.png') }}" alt="img not found!" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$9.90</span>
                      <img src="{{ asset('home/img/slide-1/product6.png') }}" alt="img not found!" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$4.60</span>
                      <img src="{{ asset('home/img/slide-1/product5.png') }}" alt="img not found!" />
                    </a>
                  </li>				
                </ul>
              </div>

              <!-- item 2 -->
              <div>
                <img src="{{ asset('home/img/slide-2/slide-2.jpg') }}" data-image-src="{{ asset('home/img/slide-2/bg-768.jpg') }}" alt="img not found!">
                

                <!-- banner -->
                <div class="mx-slide-banner">
                  <a href="#">
                    <img src="{{ asset('home/img/slide-2/banner-2.png') }}" alt="img not found!" />
                    
                  </a>
                </div>

                <!-- Related products slider -->
                <ul class="mx-related-products">
                  <li>
                    <a href="#">
                      <span class="mx-price">$7.90</span>
                      <img src="{{ asset('home/img/slide-2/product1.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$5.40</span>
                      <img src="{{ asset('home/img/slide-2/product2.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$3.80</span>
                      <img src="{{ asset('home/img/slide-2/product3.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$8.10</span>
                      <img src="{{ asset('home/img/slide-2/product4.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$6.00</span>
                      <img src="{{ asset('home/img/slide-2/product5.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$2.60</span>
                      <img src="{{ asset('home/img/slide-2/product6.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                </ul>
              </div>
              
              <!-- item 3 -->
              <div>
                <img src="{{ asset('home/img/slide-3/slide-3.jpg') }}" data-image-src="{{ asset('home/img/slide-3/bg-768.jpg') }}" alt="img not found!">
                

                <!-- banner -->
                <div class="mx-slide-banner">
                  <a href="#">
                    <img src="{{ asset('home/img/slide-3/banner-3.png') }}" alt="img not found!" />
                    
                  </a>
                </div>

                <!-- Related products slider -->
                <ul class="mx-related-products">
                  <li>
                    <a href="#">
                      <span class="mx-price">$11.10</span>
                      <img src="{{ asset('home/img/slide-3/product1.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>				
                  <li>
                    <a href="#">
                      <span class="mx-price">$4.60</span>
                      <img src="{{ asset('home/img/slide-3/product3.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$5.50</span>
                      <img src="{{ asset('home/img/slide-3/product4.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$2.20</span>
                      <img src="{{ asset('home/img/slide-3/product5.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$7.60</span>
                      <img src="{{ asset('home/img/slide-3/product2.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="mx-price">$2.70</span>
                      <img src="{{ asset('home/img/slide-3/product6.png') }}" alt="img not found!" />
                      
                    </a>
                  </li>
                </ul>
              </div>		
            
            </div>
            <!-- .mx-product-slider -->

          </div>

        </div>
      </div>
    </section>

    <!-- hero -->
    <section id="hero">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="card-lg mb-4 mb-lg-0">
                <h2>{{ $discount_percentage }}%</h2>
                <h4>{{ $homepagesetting->discount_heading }}</h4>
                <p>{{ $homepagesetting->discount_sub_heading }}</p>

                <div class="float-item">
                  <img src="{{ asset('home/img/shoe.png') }}" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="card-sm purple mb-3">
                <!-- product image -->
                <div class="product">
                  <img src="{{ asset('home/img/beanbag.png') }}" alt="">
                </div>

                <div>
                  <h2>{{ $homepagesetting->featuredProduct1->product_name }}</h2>
                  <p>${{ $homepagesetting->featuredProduct1->regular_price }}</p>
                </div>
              </div>

              <div class="card-sm sky">
                <div>
                  <h2>{{ $homepagesetting->featuredProduct2->product_name }}</h2>
                  <p>${{ $homepagesetting->featuredProduct2->regular_price }}</p>
                </div>

                <!-- product image -->
                <div class="product">
                  <img src="{{ asset('home/img/vr-glass.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    @livewire('home-product-filter-component')

    
    <!-- ===== Product Section Start ===== -->
    <section class="products-section" id="products">
      <div class="container">
        <div class="row" style="position: relative;">
          <h2 class="subtitle">Top Rated</h2>
          <div class="container productbackground">
          <div class="owl-carousel" id="product-carousel">
          <!-- ----- Products Item Start -->
          <div class="col-lg-12">
            <div class="products-item">
              <div class="product-img">
                <img src="{{ asset('home/img/owl/1.jpg') }}" class="img-fluid" alt="wrist watch">
                
                <div class="overlay d-flex">
                  <a href="#" class="btn mybtn1">Buy Now</a>
                </div>
              </div>
              <div class="product-content">
                <div class="product-price">
                  <span class="new-price">$49</span>
                  <span class="old-price">$95</span>
                </div>
                <h5 class="product-name">Simple product 001 Simple product 001 Simple product 001</h5>
              </div>
            </div>
          </div>
          <!-- ----- Products Item End -->
          <!-- ----- Products Item Start -->
          <div class="col-lg-12">
            <div class="products-item">
              <div class="product-img">
                <img src="{{ asset('home/img/owl/2.jpg') }}" class="img-fluid" alt="wrist watch">
                
                <div class="overlay d-flex">
                  <a href="#" class="btn mybtn1">Buy Now</a>
                </div>
              </div>
              <div class="product-content">
                <div class="product-price">
                  <span class="new-price">$49</span>
                  <span class="old-price">$95</span>
                </div>
                <h5 class="product-name">Simple product 002</h5>
              </div>
            </div>
          </div>
          <!-- ----- Products Item End -->
          <!-- ----- Products Item Start -->
          <div class="col-lg-12">
            <div class="products-item">
              <div class="product-img">
                <img src="{{ asset('home/img/owl/3.jpg') }}" class="img-fluid" alt="wrist watch">
                
                <div class="overlay d-flex">
                  <a href="#" class="btn mybtn1">Buy Now</a>
                </div>
              </div>
              <div class="product-content">
                <div class="product-price">
                  <span class="new-price">$49</span>
                  <span class="old-price">$95</span>
                </div>
                <h5 class="product-name">Simple product 003</h5>
              </div>
            </div>
          </div>
          <!-- ----- Products Item End -->
          <!-- ----- Products Item Start -->
          <div class="col-lg-12">
            <div class="products-item">
              <div class="product-img">
                <img src="{{ asset('home/img/owl/4.jpg') }}" class="img-fluid" alt="wrist watch">
                
                <div class="overlay d-flex">
                  <a href="#" class="btn mybtn1">Buy Now</a>
                </div>
              </div>
              <div class="product-content">
                <div class="product-price">
                  <span class="new-price">$49</span>
                  <span class="old-price">$95</span>
                </div>
                <h5 class="product-name">Simple product 004</h5>
              </div>
            </div>
          </div>
          <!-- ----- Products Item End -->
          <!-- ----- Products Item Start -->
          <div class="col-lg-12">
            <div class="products-item">
              <div class="product-img">
                <img src="{{ asset('home/img/owl/5.jpg') }}" class="img-fluid" alt="wrist watch">
                
                <div class="overlay d-flex">
                  <a href="#" class="btn mybtn1">Buy Now</a>
                </div>
              </div>
              <div class="product-content">
                <div class="product-price">
                  <span class="new-price">$49</span>
                  <span class="old-price">$95</span>
                </div>
                <h5 class="product-name">Simple product 005</h5>
              </div>
            </div>
          </div>
          <!-- ----- Products Item End -->
          </div>
        </div>
        </div>

      </div>
    </section>
        <!-- ===== Product Section End ===== -->


    <section id="loryslider">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-12">
            <h2 style="margin-bottom: 10px;">On Sale</h2>

            <div class="slider js_ease ease">
                <div class="frame js_frame">
                    <ul class="slides js_slides">
                        <li class="js_slide">1</li>
                        <li class="js_slide">2</li>
                        <li class="js_slide">3</li>
                        <li class="js_slide">4</li>
                        <li class="js_slide">5</li>
                        <li class="js_slide">6</li>
                        <li class="js_slide">7</li>
                        <li class="js_slide">8</li>
                        <li class="js_slide">9</li>
                        <li class="js_slide">10</li>
                        <li class="js_slide">11</li>
                        <li class="js_slide">12</li>
                    </ul>
                </div>

                
                <div>
                  <a class="prevbtn js_prev">
                    <span class="prev">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#f6fbff" d="M302.67 90.877l55.77 55.508L254.575 250.75 358.44 355.116l-55.77 55.506L143.56 250.75z"/></g></svg>
                    </span>
                  </a>
                </div>
                

                <div>
                  <a class="nextbtn js_next">
                    <span class="next">
                      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#f6fbff" d="M199.33 410.622l-55.77-55.508L247.425 250.75 143.56 146.384l55.77-55.507L358.44 250.75z"/></g></svg>
                    </span>
                  </a>
                </div>

            </div>

          </div>

        </div>
      </div>
    </section>

    <section id="loryslider2">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-12">
            <h2 style="margin-bottom: 10px;">Most Viewed</h2>

            <div class="slider js_ease2 ease">
                <div class="frame js_frame">
                    <ul class="slides js_slides">
                        <li class="js_slide">1</li>
                        <li class="js_slide">2</li>
                        <li class="js_slide">3</li>
                        <li class="js_slide">4</li>
                        <li class="js_slide">5</li>
                        <li class="js_slide">6</li>
                        <li class="js_slide">7</li>
                        <li class="js_slide">8</li>
                        <li class="js_slide">9</li>
                        <li class="js_slide">10</li>
                        <li class="js_slide">11</li>
                        <li class="js_slide">12</li>
                    </ul>
                </div>

                
                <div>
                  <a class="js_prev">
                    <span class="prev">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#f6fbff" d="M302.67 90.877l55.77 55.508L254.575 250.75 358.44 355.116l-55.77 55.506L143.56 250.75z"/></g></svg>
                    </span>
                  </a>
                </div>
                

                <div>
                  <a class="js_next">
                    <span class="next">
                      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#f6fbff" d="M199.33 410.622l-55.77-55.508L247.425 250.75 143.56 146.384l55.77-55.507L358.44 250.75z"/></g></svg>
                    </span>
                  </a>
                </div>

            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="category-section" id="category">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-12">

            <h2 style="margin-bottom: 10px;">Have you seen our services?</h2>

            <div class="owl-carousel owl-theme owl-carousel-custom" id="category-carousel">
              <div class="item catdiv">
                <h4>1</h4>
              </div>
              <div class="item catdiv">
                <h4>2</h4>
              </div>
              <div class="item catdiv">
                <h4>3</h4>
              </div>
              <div class="item catdiv">
                <h4>4</h4>
              </div>
              <div class="item catdiv">
                <h4>5</h4>
              </div>
              <div class="item catdiv">
                <h4>6</h4>
              </div>
              <div class="item catdiv">
                <h4>7</h4>
              </div>
              <div class="item catdiv">
                <h4>8</h4>
              </div>
              <div class="item catdiv">
                <h4>9</h4>
              </div>
              <div class="item catdiv">
                <h4>10</h4>
              </div>
              <div class="item catdiv">
                <h4>11</h4>
              </div>
              <div class="item catdiv">
                <h4>12</h4>
              </div>

              <div class="item catdiv">
                <h4>13</h4>
              </div>
              <div class="item catdiv">
                <h4>14</h4>
              </div>
              <div class="item catdiv">
                <h4>15</h4>
              </div>
              <div class="item catdiv">
                <h4>16</h4>
              </div>

            </div>

            <div class="allbtn">
              <a href="#"><p>Explore all our services</p></a>
            </div>

        </div>
      </div>
    </section>

    


    <section id="basic">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-12">
            <h2 style="margin-bottom: 10px;">Recommended for you</h2>
            
            <div class="carouseller row-fluid for-car"> 
              <div class="carousel-wrapper"> 
                <div class="carousel-items"> 
                  
                  <div class="span3 carousel-block">

                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/vacmaster.png') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                      
                  </div>

                  <div class="span3 carousel-block">
                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/paint.webp') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                  </div>

                  <div class="span3 carousel-block">
                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/talador.jpg') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                  </div>

                  <div class="span3 carousel-block">
                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/box.webp') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                  </div>

                  <div class="span3 carousel-block">

                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/vacmaster.png') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                      
                  </div>

                  <div class="span3 carousel-block">
                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/paint.webp') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                  </div>

                  <div class="span3 carousel-block">
                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/talador.jpg') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                  </div>

                  <div class="span3 carousel-block">
                    <div class="recommend-card">
                      <!-- image -->
                      <div class="recommend-img">
                        <img src="{{ asset('home/img/box.webp') }}" alt="">
                      </div>
                      
                      <div class="cardproductname">
                        <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                      </div>
                      
                      <div class="star">
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                        <i class="fa-solid fa-star" style="color: #fa6400;"></i>
                      </div>
                      
                      <div class="cardprice">
                        <h4 class="mb-2 price">$190.56</h4>
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
                        <a class="addtocartbtn" href="#!">Add to Cart</a>
                      </div>
      
                      
                    </div>
                  </div>
                  

                </div>
              </div>
              <div class="carousel-control-block">
                <div class="carousel-button-left shadow"><a href="javascript:void(0)">‹</a></div> 
                <div class="carousel-button-right shadow"><a href="javascript:void(0)">›</a></div> 
              </div>
            </div>
            
          </div>

        </div>
      </div>
    </section>

    

@endsection