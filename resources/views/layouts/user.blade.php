<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/darkly/bootstrap.min.css">
    <!-- ===================
               start Slier  
         =================== -->
    
           <!-- Related product Style -->
    <link rel="stylesheet" href="{{ asset('home/css/related-product-slider.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
     
    <!-- ===================
             end slider 
         =================== -->


    <!-- ===================
           start Owl carousel 
         =================== -->

    <!-- ===== Owl carousel -->
     <link rel="stylesheet" href="{{ asset('home/css/owl/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('home/css/owl/owl.theme.default.min.css') }}">
   
     <!-- ===== Custom CSS ===== -->
     <link rel="stylesheet" href="{{ asset('home/css/owl/app.css') }}">

     <!-- ===== Responsive CSS ===== -->
     <link rel="stylesheet" href="{{ asset('home/css/owl/responsive.css') }}">
     <link rel="stylesheet" href="{{ asset('home/css/owl/effects.css') }}">

     <!-- ===== Fontawesome ===== -->
     <link rel="stylesheet" href="{{ asset('home/css/owl/fontawesome.css') }}">
    

       <!-- ===================
             end Owl carousel 
            =================== -->

      <!-- ===== lory carousel ===== -->
      <link rel="stylesheet" href="{{ asset('home/css/Multiple/lory.css') }}">
      

    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">


    <!-- title -->
    <title>QuickCart || Details</title>
  </head>

  <body>
    <!-- header -->
    <header id="header">
      <div class="container">
        <div class="flex justify-content-between align-items-center position-relative">
          <!-- logo -->
          <div>
            <a class="logo" href="#!">
              <img src="{{ asset('home/img/logo.svg') }}" alt="">
              <span>QuickCart</span>
            </a>
          </div>

          <!-- search -->
        
        <div class="search-bar-wrap d-none d-md-block">
            @livewire('product-search-component')
        </div>

          <!-- cta buttons -->
          <div class="flex align-items-center gap-3">
            <a href="#!" class="cart-btn">
              <i class="fas fa-cart-plus"> </i>
            </a>

            <a href="#!" class="btn-sm d-none d-sm-inline">
              Sign In
            </a>
          </div>

          <!-- cart -->
          <div class="cart-wrap">
            <h6 class="cart-title">Cart</h6>

            <!-- cart item -->
            @livewire('cart-component')
          </div>
        </div>
      </div>
    </header>

    <!-- navbar -->
    <nav class="navbar">
      <div class="container">
        <ul class="navlinks">
          <li>
            <a href="#!">Trending</a>
          </li>
          <li class="position-relative">
            <!-- dropdown toggler -->
            <a class="dropdown-btn" href="#!">
              <span>Categories</span>
              <i class="fa-solid fa-angle-down"></i>
            </a>

            <!-- dropdown links -->
            <ul class="dropdown-links">
              <li>
                <a href="#!">Accessories</a>
              </li>
              <li>
                <a href="#!">Beauty</a>
              </li>
              <li>
                <a href="#!">Electronics</a>
              </li>
              <li>
                <a href="#!">Fashion</a>
              </li>
              <li>
                <a href="#!">Kids</a>
              </li>
              <li>
                <a href="#!">Shoes</a>
              </li>
              <li>
                <a href="#!">Sports</a>
              </li>
              <li>
                <a href="#!">Watches</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#!">Discounts</a>
          </li>
          <li>
            <a href="#!">Gift Collections</a>
          </li>
          <li>
            <a href="#!">Stores</a>
          </li>
        </ul>

        <!-- mobile search bar -->
        <div class="search-bar-wrap d-block d-md-none">
          <form action="" method="">
            <div class="search-bar">
              <input type="text" name="query" placeholder="Search Product..." required>
              <div class="search-icon">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </form>
        </div>

        <!-- nav toggler -->
        <div class="nav-toggler d-block d-md-none">
          <a href="#!">
            <i class="fas fa-bars"></i>
          </a>
        </div>
      </div>
    </nav>

    <!-- breadcrumb -->
     <!-- <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="breadcrumb-title">Home > Shoe > <span>Quip Sports X19</span></p>
        </div>
      </div>
    </div> -->

    <!-- main contents -->
    <main>
      @yield('home')

      <!-- flash sale -->
        @livewire('flash-sale-countdown-component')
    </main>

    <!-- footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <a class="logo" href="#!">
              <img src="{{ asset('home/img/logo.svg') }}" alt="">
              <span>QuickCart</span>
            </a>

            <p class="mt-3">Where brands meets happiness. Customer smile is our first priority.</p>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <ul class="footer-links">
              <li>
                <p class="title">About Us</p>
              </li>
              <li>
                <a href="#!">About QuickCart</a>
              </li>
              <li>
                <a href="#!">Career</a>
              </li>
              <li>
                <a href="#!">Sponsors</a>
              </li>
              <li>
                <a href="#!">Campaigns</a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <ul class="footer-links">
              <li>
                <p class="title">Stores</p>
              </li>
              <li>
                <a href="#!">Nick's Tshirt</a>
              </li>
              <li>
                <a href="#!">Vlads Sports</a>
              </li>
              <li>
                <a href="#!">IQ 360</a>
              </li>
              <li>
                <a href="#!">Decor Plus+</a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <ul class="footer-links">
              <li>
                <p class="title">Important</p>
              </li>
              <li>
                <a href="#!">Privacy</a>
              </li>
              <li>
                <a href="#!">Cookie Policy</a>
              </li>
              <li>
                <a href="#!">Terms & Conditions</a>
              </li>
              <li>
                <a href="#!">Refund Policy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  
    <!-- bootstrap javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"></script>

    

    <!-- jquery Library -->
    <script src="{{ asset('home/js/jquery.min.js') }}"></script>
    <!-- ===== Jquery js ===== -->
    <script src="{{ asset('home/js/owl/jquery-3.6.0.min.js') }}"></script>

    

    <!-- Related Products Slider -->
    <script src="{{ asset('home/js/related_product_slider/related-product-slider.min.js') }}"></script>

    <!-- ===== Owl carousel js ===== -->
    <script src="{{ asset('home/js/owl/owl.carousel.min.js') }}"></script>

    <!-- ===== lory carousel js ===== -->
    <script src="{{ asset('home/js/Multiple/lory.min.js') }}"></script>
    <script src="{{ asset('home/js/Multiple/jquery.lory.min.js') }}"></script>



    <!-- Document Ready Script -->
    <script src="{{ asset('home/js/document_ready.js') }}"></script>

    
    

  </body>

</html>