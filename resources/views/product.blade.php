<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
  <link rel="mask-icon" href="{{asset('images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="{{asset('css/theme.bundle.css')}}">
  <link rel="stylesheet" href="{{asset('css/libs.bundle.css')}}">


  <!-- Main CSS -->
  <link rel="stylesheet" href="{{asset('css/theme.bundle.css')}}">

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>OldSkool | Bootstrap 5 HTML Template</title>

</head>
<body class="">

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
    
                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./">
                        <div class="d-flex align-items-center">
                            <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                        </div>
                    </a>
                    <!-- / Logo-->
    
                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">
    
                        <!-- Mobile Nav Toggler-->
                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                        </li>
                        <!-- /Mobile Nav Toggler-->
    
                        <!-- Navbar Search-->
                        <li class="d-none d-sm-block">
                            <span class="nav-link text-body search-trigger cursor-pointer">Search</span>
    
                            <!-- Search navbar overlay-->
                            <div class="navbar-search d-none">
                                <div class="input-group mb-3 h-100">
                                    <span class="input-group-text px-4 bg-transparent border-0"><i
                                            class="ri-search-line ri-lg"></i></span>
                                    <input type="text" class="form-control text-body bg-transparent border-0"
                                        placeholder="Enter your search terms...">
                                    <span
                                        class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                            class="ri-close-circle-line ri-lg"></i></span>
                                </div>
                            </div>
                            <div class="search-overlay"></div>
                            <!-- / Search navbar overlay-->
    
                        </li>
                        <!-- /Navbar Search-->
    
                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="{{route('login2')}}">
                                Account
                            </a>
                        </li>
                        <!-- /Navbar Login-->
    
                        <!-- Navbar Cart Icon-->
                        <li class="ms-1 d-inline-block position-relative dropdown-cart">
                            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                                type="button">
                                Bag (2)
                            </button>
                            <div class="cart-dropdown dropdown-menu">
                            
                                <!-- Cart Header-->
                                <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                    <h6 class="fw-bolder m-0">Cart Summary (2 items)</h6>
                                    <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                                </div>
                                <!-- / Cart Header-->
                            
                                <!-- Cart Items-->
                                <div>
                            
                                    <!-- Cart Product-->
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="{{asset('images/products/product-cart-1.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Nike Air VaporMax 2021
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 / Qty: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                        </div>
                                    </div>
                                    <!-- Cart Product-->
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="{{asset('images/products/product-cart-2.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Nike ZoomX Vaporfly
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 / Qty: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cart Items-->
                            
                                <!-- Cart Summary-->
                                <div>
                                    <div class="pt-3">
                                        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                            <div>
                                                <p class="m-0 fw-bold fs-5">Grand Total</p>
                                                <span class="text-muted small">Inc $45.89 sales tax</span>
                                            </div>
                                            <p class="m-0 fs-5 fw-bold">$422.99</p>
                                        </div>
                                    </div>
                                    <a href="./cart" class="btn btn-outline-dark w-100 text-center mt-4" role="button">View Cart</a>
                                    <a href="./checkout" class="btn btn-dark w-100 text-center mt-2" role="button">Proceed To Checkout</a>
                                </div>
                                <!-- / Cart Summary-->
                              </div>
                            
    
                        </li>
                        <!-- /Navbar Cart Icon-->
    
                    </ul>
                    <!-- Navbar Icons-->                
    
                    <!-- Main Navigation-->
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
                        id="navbarNavDropdown">
    
                        <!-- Menu-->
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown dropdown position-static">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Men
                              </a>
                                <!-- Menswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                  <div class="container-fluid">
                                      <div class="row g-0 g-lg-3">
                                          <!-- Menswear Dropdown Menu Links Section-->
                                          <div class="col col-lg-8 py-lg-5">
                                              <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                  <!-- menu row-->
                                                  <div class="col">
                                                      <h6 class="dropdown-heading">Coats & Jackets</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Waterproof Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Insulated Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Down Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Softshell Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Casual Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Windproof Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Breathable Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Cleaning & Proofing</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->
                                              
                                                  <!-- menu row-->
                                                  <div class="col">
                                                      <h6 class="dropdown-heading">Insulated</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Insulated Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Bodywarmers</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Parkas</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Baselayers & Thermals</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Winter Hats</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Scarves & Neck</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Gloves & Mitts</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Accessories</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->
                                              
                                                  <!-- menu row-->
                                                  <div class="d-none d-xxl-block col">
                                                      <h6 class="dropdown-heading">Footwear</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Lifestyle & Casual</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Walking Shoes</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Running Shoes</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Military Boots</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Fabric Walking Boots</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Leather Walking Boots</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Wellies</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.html">Winter Footwear</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.html">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->  
                                                  
                                                  <!-- menu row-->
                                                  <div class="col">
                                                      <h6 class="dropdown-heading text-danger">Special Offers</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Insulated Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Bodywarmers</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Parkas</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Baselayers & Thermals</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Winter Hats</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Scarves & Neck</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Gloves & Mitts</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Accessories</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger dropdown-link-all" href="./category.html">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->      
                                              </div>
                                              
                                              <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.html">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-1.svg" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.html">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-2.svg" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.html">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-3.svg" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.html">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-4.svg" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.html">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-5.svg" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.html">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-6.svg" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                              </div>                  </div>
                                          <!-- /Menswear Dropdown Menu Links Section-->
                        
                                          <!-- Menswear Dropdown Menu Images Section-->
                                          <div class="col-lg-4 d-none d-lg-block">
                                              <div class="vw-50 border-start h-100 position-absolute"></div>
                                              <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                  <div class="row g-4">
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/banner-12.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.html">Latest Arrivals</a>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/banner-13.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.html">Accessories</a>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/banner-14.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.html">T-Shirts</a>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/banner-15.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.html">Jackets</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <a href="./category.html" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit Mens Section</a>
                                              </div>
                                          </div>
                                          <!-- Menswear Dropdown Menu Images Section-->
                                      </div>
                                  </div>
                              </div>
                              <!-- / Menswear dropdown menu-->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Women
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="./category.html">Tops</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Bottoms</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Jeans</a></li>
                                  <li><a class="dropdown-item" href="./category.html">T-Shirts</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Shoes</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Accessories</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="./category.html" role="button">
                                  Kids
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="./category.html" role="button">
                                  Sale
                                </a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Pages
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="./index.html">Homepage</a></li>
                                  <li><a class="dropdown-item" href="./category.html">Category</a></li>
                                  <li><a class="dropdown-item" href="./product.html">Product</a></li>
                                  <li><a class="dropdown-item" href="./cart.html">Cart</a></li>
                                  <li><a class="dropdown-item" href="./checkout.html">Checkout</a></li>
                                  <li><a class="dropdown-item" href="./login.html">Login</a></li>
                                  <li><a class="dropdown-item" href="./register.html">Register</a></li>
                                  <li><a class="dropdown-item" href="./forgotten-password.html">Forgotten Password</a></li>
                                </ul>
                              </li>
                          </ul>                    <!-- / Menu-->
    
                    </div>
                    <!-- / Main Navigation-->
    
                </div>
            </div>
        </div>
    </nav>
    <!-- / Navbar-->    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 ">
        <!-- Page Content Goes Here -->            
        
        <!-- Breadcrumbs-->
        <div class="bg-dark py-6">
            <div class="container-fluid">
                <nav class="m-0" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item breadcrumb-light"><a href="#">Home</a></li>
                      <li class="breadcrumb-item breadcrumb-light"><a href="#">T-Shirts</a></li>
                      <li class="breadcrumb-item  breadcrumb-light active" aria-current="page">Osaka Japan Mens T-Shirt</li>
                    </ol>
                </nav>            </div>
        </div>
        <!-- / Breadcrumbs-->


        <div class="container-fluid mt-5">
        @isset($prdct)
            <!-- Product Top Section-->
            <div class="row g-9" data-sticky-container>

                <!-- Product Images-->
                <div class="col-12 col-md-6 col-xl-7">
                    <div class="row g-3" data-aos="fade-right">
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-4.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                    </div>
                </div>
                <!-- /Product Images-->
    
                <!-- Product Information-->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="sticky-top top-5">
                        <div class="pb-3" data-aos="fade-in">
                            <div class="d-flex align-items-center mb-3">

                                <div class="d-flex justify-content-start align-items-center disable-child-pointer cursor-pointer"
                                data-pixr-scrollto
                                data-target=".reviews">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 80%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>        <small class="text-muted d-inline-block ms-2 fs-bolder">(105 reviews)</small>
                            </div>
                            </div>
                            
                            <h1 class="mb-1 fs-2 fw-bold">{{$prdct->name}}</h1>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fs-4 m-0">${{$prdct->price}}</p>
                            </div>
                            <div class="border-top mt-4 mb-3 product-option">
                                <small class="text-uppercase pt-4 d-block fw-bolder">
                                    <span class="text-muted">Available Sizes (Mens)</span> : <span class="selected-option fw-bold"
                                        data-pixr-product-option="size">M</span>
                                </small>
                                <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                                            <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="S" 
                                                    id="option-sizes-0">
                                                <label for="option-sizes-0">
                                                    
                                                    <small>S</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="SM" 
                                                    id="option-sizes-1">
                                                <label for="option-sizes-1">
                                                    
                                                    <small>SM</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="M" 
                                                        checked
                                                    id="option-sizes-2">
                                                <label for="option-sizes-2">
                                                    
                                                    <small>M</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="L" 
                                                    id="option-sizes-3">
                                                <label for="option-sizes-3">
                                                    
                                                    <small>L</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="Xl" 
                                                    id="option-sizes-4">
                                                <label for="option-sizes-4">
                                                    <small>XL</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="XXL" 
                                                    id="option-sizes-5">
                                                <label for="option-sizes-5">
                                                    
                                                    <small>XXL</small>
                                                </label>
                                            </div>        </div>
                            </div>
                            <div class="mb-3">
                                <small class="text-uppercase pt-4 d-block fw-bolder text-muted">
                                    Available Designs :
                                </small>
                                <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                                    <picture class="me-2">
                                        <img class="f-w-24 p-2 bg-light border-bottom border-dark border-2 cursor-pointer" src="./assets/images/products/product-page-thumb-1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <picture>
                                        <img class="f-w-24 p-2 bg-light cursor-pointer" src="./assets/images/products/product-page-thumb-2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                </div>
                            </div>
                            <button class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow">Add To Shopping Bag</button>
                        
                            <!-- Product Highlights-->
                                <div class="my-5">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-24-hours-line ri-2x"></i>
                                                <small class="d-block mt-1">Next-day Delivery</small>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-secure-payment-line ri-2x"></i>
                                                <small class="d-block mt-1">Secure Checkout</small>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-service-line ri-2x"></i>
                                                <small class="d-block mt-1">Free Returns</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- / Product Highlights-->
                        
                            <!-- Product Accordion -->
                            <div class="accordion" id="accordionProduct">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Product Details
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <p class="m-0">{{$prdct->description}}</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Details & Care
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionProduct">
                                      <div class="accordion-body">
                                          <ul class="list-group list-group-flush">
                                              <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                  <span class="col-4 fw-bolder">Composition</span>
                                                  <span class="col-7 offset-1">98% Cotton, 2% elastane</span>
                                              </li>
                                              <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                  <span class="col-4 fw-bolder">Care</span>
                                                  <span class="col-7 offset-1">Professional dry clean only. Do not bleach. Do not iron.</span>
                                              </li>
                                          </ul>
                                      </div>
                                    </div>
                                  </div>        
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Delivery & Returns
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Delivery</span>
                                                <span class="col-7 offset-1">Standard delivery free for orders over $99. Next day delivery $9.99</span>
                                            </li>
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Returns</span>
                                                <span class="col-7 offset-1">30 day return period. See our <a class="text-link-border" href="#">terms & conditions.</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- / Product Accordion-->
                        </div>                    </div>
                </div>
                <!-- / Product Information-->
            </div>
            <!-- / Product Top Section-->
            @endisset

            <div class="row g-0">
            @isset($prdct)
                <!-- Related Products-->
                <div class="col-12" data-aos="fade-up">
                    <h3 class="fs-4 fw-bolder mt-7 mb-4">You May Also Like</h3>
                    <!-- Swiper Latest -->
                    <div class="swiper-container" data-swiper data-options='{
                        "spaceBetween": 10,
                        "loop": true,
                        "autoplay": {
                          "delay": 5000,
                          "disableOnInteraction": false
                        },
                        "navigation": {
                          "nextEl": ".swiper-next",
                          "prevEl": ".swiper-prev"
                        },   
                        "breakpoints": {
                          "600": {
                            "slidesPerView": 2
                          },
                          "1024": {
                            "slidesPerView": 3
                          },       
                          "1400": {
                            "slidesPerView": 4
                          }
                        }
                      }'>
                      <div class="swiper-wrapper">
                          @foreach($products as $product)
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{asset('faker/').'/'. $product->image }}" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="{{route("product", ["id"=>$product->id])}}">Nike Air VaporMax 2021</a>
                                      <small class="text-muted d-block">4 colours, 10 sizes</small>
                                              <p class="mt-2 mb-0 small"><s class="text-muted">$329.99</s> <span class="text-danger">$198.66</span></p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                          @endforeach

                      </div>
                    
                      <!-- Add Arrows -->
                      <div
                        class="swiper-prev top-50  start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                        <i class="ri-arrow-left-s-line ri-lg"></i></div>
                      <div
                        class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                        <i class="ri-arrow-right-s-line ri-lg"></i></div>
                    
                    
                    </div>
                    <!-- / Swiper Latest-->                </div>
                <!-- / Related Products-->
            @endisset
            @isset($prdct)
                <!-- Reviews-->
                <div class="col-12" data-aos="fade-up">

                    <h3 class="fs-4 fw-bolder mt-7 mb-4 reviews">Reviews</h3>

                    @if(count($reviews) > 0)
                    <!-- Review Summary-->
                    <div class="bg-light p-5 justify-content-between d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column align-items-center mb-4 mb-lg-0">
                            <div class="bg-dark text-white f-w-24 f-h-24 d-flex rounded-circle align-items-center justify-content-center fs-2 fw-bold mb-3">4.3</div>
                            <!-- Review Stars Medium-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 88%">
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                </div>
                            </div>    </div>
                        <div class="d-flex flex-grow-1 flex-column ms-lg-8">
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 100%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">55</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 80%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">32</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 60%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">15</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 40%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 8%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">5</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 20%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">1</span>
                            </div>
                            <p class="mt-3 mb-0 d-flex align-items-start"><i class="ri-chat-voice-line me-2"></i> 105 customers have reviewed this product</p>
                        </div>
                    </div><!-- / Rewview Summary-->
                    @endif


                    @if(count($reviews) == 0 && auth()->user() != null) <h3>Be the first person to comment</h3>
                    @elseif(count($reviews) == 0) <h3>No reviews</h3>
                    @endif



                    <div class="row g-6 g-md-8 g-lg-10 my-3">
                <!-- Reviews-->
                @foreach($reviews as $review)

                            <div class="col-12 col-lg-6 col-xxl-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="text-muted small">{{$review->created_at->diffForHumans()}}</div>
                                    <!-- Review Stars Small-->
                                    @if(auth()->user()->id == $review->users_id)
                                    <div>
                                <a href="{{route('review.delete',['id'=>$review->id])}}"><span>remove</span></a>
                               <a href="{{route('review.edit',['product_id'=>$review->product_id, 'review_id'=>$review->id])}}"><span>edit</span></a>
                                    </div>
                                    @endif
                                </div>
                                <p class="fw-bold mb-2">{{$review->title}}</p>
                                <p class="fs-7">{{$review->comment}}</p>
                            </div>

                @endforeach
                    </div>
                @endisset

                <!-- / Reviews-->
                <!-- Main Section-->
                    <section
                            class="mt-0 overflow-hidden d-flex justify-content-center align-items-center">
                        <!-- Page Content Goes Here -->

                        @if(auth()->user() != null)
                        <!-- Login Form-->
                        <div class="col col-md-8 col-lg-6 col-xxl-5">
                            <div class="shadow-xl p-4 p-lg-5 bg-white">
                                <h1 class="text-center fw-bold mb-5 fs-2">@isset($review) Update your review @endisset @isset($prdct) Post a review @endisset </h1>
                                <form action="{{route('review.create')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label class="form-label" for="title-comment">Title comment</label>
                                        <input type="name" class="form-control" id="title-comment" name="title" placeholder="Title of your comment" value="@isset($review) {{ $review->title }} @endisset">
                                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
                                            Message
                                            <span class="text-muted small">Put here your message</span>
                                        </label>
                                        <textarea name="comment" class="form-control" id="login-password" placeholder="Enter your comment">@isset($review){{ $review->comment }}@endisset</textarea>
                                        @error('comment') <span class="text-danger">{{$message}}</span>@enderror
                                    </div>

                                   <input type="hidden" name="product_id" value=" @isset($prdct) {{ $prdct->id}} @endisset @isset($review) {{$review->id}} @endisset"/>
                                    <input type="hidden" name="users_id" value="{{auth()->user()->id}}"/>
                                    <button type="submit" formaction="{{route('review.update', ['product_id'=>$review->product_id, 'review_id' => $review->id])}}" class="btn btn-dark d-block w-100 my-4">@isset($review) Edit @endisset @isset($prdct) Submit @endisset</button>
                                </form>
                            </div>
                        </div>
                        @endif
                        <!-- / Login Form-->

                        <!-- /Page Content -->
                    </section>
                    <!-- / Main Section-->
                    
                    <!-- Review Pagination-->
                    <!--
                   <div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
                       <small class="text-muted">Showing 6 of 105 reviews</small>
                       <div class="progress f-h-1 mt-3">
                           <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                       <a href="#" class="btn btn-outline-dark btn-sm mt-5 align-self-center py-3 px-4 border-2">Load More</a>
                   </div>

                    -->
                </div>
                <!-- / Reviews-->
            </div>

        </div>


        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <footer class="border-top py-5 mt-4  ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-snapchat-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2022 DoubleNuggets No Rights Reserved. Template by <a
                            href="https://www.pixelrocket.store">Pixel Rocket</a></p>
                    <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i
                                class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    <!-- / Footer-->  

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{asset('js/theme.bundle.js')}}"></script>
    <script src="{{asset('js/vendor.bundle.js')}}"></script>
</body>

</html>
