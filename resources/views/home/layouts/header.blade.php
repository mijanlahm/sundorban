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
          <a href="{{ route('cart.view') }}" class="cart-btn">
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