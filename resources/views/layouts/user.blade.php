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

      <!-- ===== start xzoom ===== -->
      <link rel="stylesheet" href="{{ asset('home/css/xzoom/xzoom.min.css') }}">
      <!-- ===== end xzoom ===== -->
    
      
    <!-- mega menu stylesheet -->  
    <link rel="stylesheet" href="{{ asset('home/css/megamenu/megamenustyle.css') }}"> 

    <!-- nav stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('home/css/nav/bootstrap-5-navbar.css') }}">
    
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

  


    <!-- title -->
    <title>QuickCart || Details</title>
  </head>

  <body>
    
   

    <div class = "main-wrapper stickybar">
      <nav class = "megamenu">
        <div class = "brand-and-icon">
          <a class="logo" href="#!">
            <img src="{{ asset('home/img/logo.svg') }}" alt="">
            <span>QuickCart</span>
          </a>
        </div>

        <div class="search-bar flex-grow-1 mx-4">
          <input type="text" class="form-control" placeholder="Search...">
        </div>

        <div class = "navbar-collapse-mega">
          <ul class = "navbar-nav-mega">

            <li>
              <a href = "#" class = "menu-link">
                Language
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <!-- item -->
                
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Languages</h4>
                  <ul>
                    <li><a href = "#">English</a></li>
                    <li><a href = "#">Spanish</a></li>
                    <li><a href = "#">Bengali</a></li>
                    <li><a href = "#">Catalan</a></li>
                    <li><a href = "#">Frence</a></li>
                  </ul>
                </div>
                <!-- end of item -->
              </div>
            </li>

            <li>
              <a href = "#" class = "menu-link">
                Log in & Account
                <span class = "drop-icon">
                  <i class = "fas fa-chevron-down"></i>
                </span>
              </a>
              <div class = "sub-menu">
                <!-- item -->
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <h4>Your Account</h4>
                  <ul>
                    <li><a href = "#">Account</a></li>
                    <li><a href = "#">Order</a></li>
                    <li><a href = "#">Watchlist</a></li>
                    <li><a href = "#">Recommendations</a></li>
                    <li><a href = "#">Browsing History</a></li>
                  </ul>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class = "sub-menu-item">
                  <button type ="button" class ="btn btn-warning sublogin">Log In</button>
                  <P>New Customer? <a href="">Start Here</a></P>
                </div>
                <!-- end of item -->
              </div>
            </li>

            <li>
              <a href = "#">Returns & Orders</a>
            </li>

            <li>
              <!-- cta buttons -->
          <div class="flex align-items-center gap-3">
            <a href="#!" class="cart-btn">
              <i class="fas fa-cart-plus"> </i>
              Carts
            </a>

            
          </div>

          <!-- cart -->
          
          
          <div class="cart-wrap">
            <h6 class="cart-title">Cart</h6>

            <!-- cart item -->
            <div class="flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
              <!-- item -->
              <div class="cart-item flex align-items-center flex-wrap gap-3">

                <p>Item Name</p>

                <!-- item count -->
                <div class="item-count-wrap">
                  <input class="cart-item-count" type="number" value="1">

                  <a href="#!" class="item-plus">
                    <i class="fas fa-plus"></i>
                  </a>

                  <a href="#!" class="item-minus">
                    <i class="fas fas fa-minus"></i>
                  </a>
                </div>

                <p>x $190.80</p>

              </div>

              <!-- delete button -->
              <div>
                <a class="item-delete-btn" href="#!">
                  <i class="fas fa-trash-alt facolor"></i>
                </a>
              </div>
            </div>

            <!-- cart item -->
            <div class="flex align-items-center justify-content-between flex-wrap gap-3 mb-5">
              <!-- item -->
              <div class="cart-item flex align-items-center flex-wrap gap-3">

                <p>Item Name</p>

                <!-- item count -->
                <div class="item-count-wrap">
                  <input class="cart-item-count" type="number" value="1">

                  <a href="#!" class="item-plus">
                    <i class="fas fa-plus"></i>
                  </a>

                  <a href="#!" class="item-minus">
                    <i class="fas fas fa-minus"></i>
                  </a>
                </div>

                <p>x $190.80</p>

              </div>

              <!-- delete button -->
              <div>
                <a class="item-delete-btn" href="#!">
                  <i class="fas fa-trash-alt facolor"></i>
                </a>
              </div>
            </div>

            <!-- total -->
            <div
              class="flex align-items-center justify-content-between gap-4 fw-semibold border-top border-2 border-dark pt-2">
              <p>Total</p>
              <p>$380</p>
            </div>
          </div>

              
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light navbar-hoverable">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="{{ route('home') }}"">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" 
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Category
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item dropdown-toggle" href="javascript:alert('submenu')">Submenu</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Submenu action</a></li>
                              <li><a class="dropdown-item" href="#">Another submenu action</a></li>


                              <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                  </ul>
                              </li>
                              <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Submenu action 2</a></li>
                              <li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


                              <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
                                  </ul>
                              </li>
                              <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
              </li>


              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" 
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown link
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item dropdown-toggle" href="javascript:alert('submenu')">Submenu</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Submenu action</a></li>
                              <li><a class="dropdown-item" href="#">Another submenu action</a></li>


                              <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                  </ul>
                              </li>
                              <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Submenu action 2</a></li>
                              <li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


                              <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
                                  </ul>
                              </li>
                              <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
                                      <li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
          </ul>
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



    <!-- jquery Library -->
    <script src="{{ asset('home/js/jquery.min.js') }}"></script>
    <!-- ===== Jquery js ===== -->
    

    <!-- ===== mega menu js ===== -->
    <script src="{{ asset('home/js/megamenu/script.js') }}"></script>


    <!-- ===== menu js ===== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="{{ asset('home/js/nav/bootstrap-5-navbar.js') }}"></script>

    <script src="{{ asset('home/js/app.js') }}"></script>
    

    

    <!-- Related Products Slider -->
    <script src="{{ asset('home/js/related_product_slider/related-product-slider.min.js') }}"></script>

    <!-- ===== Owl carousel js ===== -->
    <script src="{{ asset('home/js/owl/owl.carousel.min.js') }}"></script>

    <!-- ===== lory carousel js ===== -->
    <script src="{{ asset('home/js/Multiple/lory.min.js') }}"></script>
    <script src="{{ asset('home/js/Multiple/jquery.lory.min.js') }}"></script>

    <!-- ===== xzoom js ===== -->
    <script src="{{ asset('home/js/xzoom/xzoom.min.js') }}"></script>

    <!-- Document Ready Script -->
    <script src="{{ asset('home/js/document_ready.js') }}"></script>

    
    

  </body>

</html>