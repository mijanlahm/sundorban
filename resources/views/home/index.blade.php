@extends('layouts.user')
@section('home')

    <section id="slider" style="height: auto;">
      <div class="">
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
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="card-lg mb-4 mb-lg-0">
                <h2>{{ $discount_percentage ?? '0' }}%</h2>
                <h4>{{ $homepagesetting->discount_heading ?? 'Default Discount Heading' }}</h4>
                <p>{{ $homepagesetting->discount_sub_heading ?? 'Default Discount Subheading' }}</p>


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
                  <h2>{{ $homepagesetting->featuredProduct1->product_name ?? 'Default Product Name' }}</h2>
                        <p>${{ $homepagesetting->featuredProduct1->regular_price ?? '0.00' }}</p>
                </div>
              </div>

              <div class="card-sm sky">
                <div>
                  <h2>{{ $homepagesetting->featuredProduct2->product_name ?? 'Default Product Name' }}</h2>
                  <p>${{ $homepagesetting->featuredProduct2->regular_price ?? '0.00' }}</p>
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


    <section class="category-1-section" id="category-1">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-lg-12">

            

            <div class="owl-carousel owl-theme owl-carousel-custom" id="category-1-carousel">
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/ex4880-large.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="{{ route('microwave') }}">Microwave</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="{{ route('mobile') }}">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_11.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_11.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_11.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

          

            </div>

            

        </div>
      </div>
    </section>

    
    <!-- ===== Product Section Start ===== -->
    <section class="products-section" id="products">
      <div class="container-fluid">
        <div class="sectionbackground">
        
          <div class="row sectionpaddingtoprating" style="position: relative;">
            
            <div class="toprateddivheading">
              <h2>Top Rated</h2>
            </div>

            <div class="container-fluid productbackground">
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
      </div>
    </section>
        <!-- ===== Product Section End ===== -->

    <section class="category-2-section" id="category-2">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-lg-12">

            <div class="owl-carousel owl-theme owl-carousel-custom" id="category-2-carousel">
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_11.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_11.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_11.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Kitchen</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_11.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_12.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_13.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/Screenshot_15.png') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>
              
              <div class="item catdiv catcontainer">
                
                <div class="catname">
                  <h4>Electronics</h4>
                </div>

                <div class="catcontent1">
                  
                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/laptop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="#">Laptop</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/desktop.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Desktop</a>
                    </div>
                  </div>

                </div>

                <div class="catcontent2">

                  <div class="subcat1">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/mobile.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Mobile</a>
                    </div>
                  </div>

                  <div class="subcat2">
                    <div class="catimage">
                      <img src="{{ asset('home/img/category/tablet.jpg') }}" alt="">
                    </div>
                    <div class="catname">
                      <a href="">Tablet</a>
                    </div>
                  </div>

                </div>

                <div class="seemore">
                  <a href="">See More</a>
                </div>

              </div>

            </div>

          </div>

        </div>
      </div>
    </section>

    <section id="loryslider2">
      <div class="container-fluid">
        <div class="sectionbackground">
          <div class="row align-items-center sectionpaddinglory">
            
            <div class="col-lg-12">
              
              <div class="mostvieweddivheading">
                <h2>Most Viewed</h2>
              </div>
              

              <div class="slider js_ease2 ease">
                  <div class="frame js_frame">
                      <ul class="slides js_slides">
                          <li class="js_slide">

                              <div class="lory-card">
                                <!-- image -->
                                <div class="recommend-img">
                                  <img src="{{ asset('home/img/vacmaster.png') }}" alt="">
                                </div>
                                
                                <div class="lorycardproductname">
                                  <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                                </div>
                                
                                <div class="lorycardprice">
                                  <h4 class="mb-2 price">$190.56</h4>
                                </div>
                                
                                <!-- add to cart -->
                                <div class="addtocartdiv">
                                  <a class="addtocartbtn" href="#!">Add to Cart</a>
                                </div>
                                
                              </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/vr-glass.png') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>
                            
                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/talador.jpg') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/shoe.png') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/paint.webp') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/box.webp') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/beanbag.png') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/vacmaster.png') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/vacmaster.png') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/vacmaster.png') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          <li class="js_slide">
                            
                            <div class="lory-card">
                              <!-- image -->
                              <div class="recommend-img">
                                <img src="{{ asset('home/img/vacmaster.png') }}" alt="">
                              </div>
                              
                              <div class="lorycardproductname">
                                <h6 class="fw-semibold mb-2">Vacmaster L Class 110V 30L Wet and Dry Vacuum Cleaner with Power Take Off & HEPA Filtration</h6>
                              </div>
                              
                              <div class="lorycardprice">
                                <h4 class="mb-2 price">$190.56</h4>
                              </div>
                              
                              <!-- add to cart -->
                              <div class="addtocartdiv">
                                <a class="addtocartbtn" href="#!">Add to Cart</a>
                              </div>
                              
                            </div>

                          </li>

                          
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
      </div>
    </section>

    <section class="favourites-section" id="favourites">
      <div class="container-fluid">
        <div class="sectionbackground">
          <div class="row align-items-center sectionpaddingfavourites">
            
            <div class="col-lg-12">

              <div class="divheading">
                <h2>Find your favourites</h2>
              </div>
              

              <div class="owl-carousel owl-theme owl-carousel-custom" id="favourites-carousel">
                
                
                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/1.webp') }}" alt="">
                      </div>
                    </div>
                    
                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/2.webp') }}" alt="">
                      </div>
                    </div>

                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/3.webp') }}" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                  
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/4.webp') }}" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/5.webp') }}" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/1.webp') }}" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/2.webp') }}" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/3.webp') }}" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/4.webp') }}" alt="">
                      </div>
                    </div>


                  </div>

                  <div class="item favouritesdiv" style="width:280px">
                    
                    <div class="favourites-circle">
                      <div class="favourites-img">
                        <img src="{{ asset('home/img/inspiration/5.webp') }}" alt="">
                      </div>
                    </div>


                  </div>
              
                

              </div>

              <div class="allbtn">
                <a href="#"><p>Explore all our services</p></a>
              </div>

          </div>
        </div>
      </div>
    </section>


    <section class="services-section" id="services">
      <div class="container-fluid">
        <div class="sectionbackground">
          <div class="row align-items-center sectionpadding">
            
            <div class="col-lg-12">

              <div class="divheading">
                <h2>Have you seen our services?</h2>
              </div>

              <div class="owl-carousel owl-theme owl-carousel-custom" id="services-carousel">
                
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/1.webp') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/2.webp') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/3.avif') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/4.webp') }}" alt="">
                  </div>
                </div>

                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/1.webp') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/2.webp') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/3.avif') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/4.webp') }}" alt="">
                  </div>
                </div>

                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/1.webp') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/2.webp') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/3.avif') }}" alt="">
                  </div>
                </div>
                <div class="item servicediv">
                  <div class="service-img">
                    <img src="{{ asset('home/img/service/4.webp') }}" alt="">
                  </div>
                </div>
                

              </div>

              <div class="allbtn">
                <a href="#"><p>Explore all our services</p></a>
              </div>

          </div>
        </div>
      </div>
    </section>

    <section class="inspiration-section" id="inspiration">
      <div class="container-fluid">
        <div class="sectionbackground">
          <div class="row align-items-center sectionpaddinginspiration">
            
            <div class="col-lg-12">

              <div class="divheading">
                <h2>Inspiration from our community</h2>
              </div>
              

              <div class="owl-carousel owl-theme owl-carousel-custom" id="inspiration-carousel">
                
                
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/1.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/2.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/3.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/4.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/5.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/1.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/2.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/3.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/4.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="item inspirationdiv" style="width:280px">
                    <div class="inspiration-img">
                      <img src="{{ asset('home/img/inspiration/5.webp') }}" alt="">
                    </div>
                  </div>
              
                

              </div>

              <div class="allbtn">
                <a href="#"><p>Explore all our services</p></a>
              </div>

          </div>
        </div>
      </div>
    </section>

    <section class="recommended-section" id="recommended">
      <div class="container-fluid">
        <div class="sectionbackground">
          <div class="row align-items-center sectionpadding">
            
            <div class="col-lg-12">

              <div class="divheadingrecommened">
                <h2>Recommended for you</h2>
              </div>

              <div class="owl-carousel owl-theme owl-carousel-custom" id="recommended-carousel">
                
                <div class="recommend-card item recommeneddiv">
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



                <div class="recommend-card item recommeneddiv">
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


                <div class="recommend-card item recommeneddiv">
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

                <div class="recommend-card item recommeneddiv">
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

                <div class="recommend-card item recommeneddiv">
                  <!-- image -->
                  <div class="recommend-img">
                    <img src="{{ asset('home/img/shoe.png') }}" alt="">
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
      </div>
    </section>

    

@endsection