<!doctype html>
<html lang="en">

<!-- Head -->

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
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- <link rel="stylesheet" href="{{asset('css/libs.bundle.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/theme.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs.bundle.css')}}">

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
    <title>DoubleNuggets</title>

</head>

<body class="">

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./index">
                        <div class="d-flex align-items-center">
                            <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
                                <path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd" />
                            </svg>
                        </div>
                    </a>
                    <!-- / Logo-->

                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

                        <!-- Mobile Nav Toggler-->
                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                        </li>
                        <!-- /Mobile Nav Toggler-->

                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="./login2">
                                Account
                            </a>
                        </li>
                        <!-- /Navbar Login-->

                        <!-- Navbar Cart Icon-->
                        <li class="ms-1 d-inline-block position-relative dropdown-cart">
                            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body" type="button">
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
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1" id="navbarNavDropdown">

                        <!-- Menu-->
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown dropdown position-static">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Poulet
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
                                                        <h6 class="dropdown-heading">Chicken of the World</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Poule de Soie</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Plymouth</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Brahma</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Cemani</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category">View All</a></li>
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
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger dropdown-link-all" href="./category">View All</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- / menu row-->
                                                </div>

                                                <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>           
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('logos/logo-1.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-2.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-3.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-4.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-5.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-6.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Menswear Dropdown Menu Links Section-->

                                            <!-- Menswear Dropdown Menu Images Section-->
                                            <div class="col-lg-4 d-none d-lg-block">
                                                <div class="vw-50 border-start h-100 position-absolute"></div>
                                                <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/banner-12.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">Latest Arrivals</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/banner-13.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">Accessories</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/banner-14.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">T-Shirts</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/banner-15.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">Jackets</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="./category" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit Mens Section</a>
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
                                    Coque
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./category">Tops</a></li>
                                    <li><a class="dropdown-item" href="./category">Bottoms</a></li>
                                    <li><a class="dropdown-item" href="./category">Jeans</a></li>
                                    <li><a class="dropdown-item" href="./category">T-Shirts</a></li>
                                    <li><a class="dropdown-item" href="./category">Shoes</a></li>
                                    <li><a class="dropdown-item" href="./category">Accessories</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./category" role="button">
                                    Poussain
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./category" role="button">
                                    Soldes
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Secours
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./index">Homepage</a></li>
                                    <li><a class="dropdown-item" href="./category">Category</a></li>
                                    <li><a class="dropdown-item" href="./product">Product</a></li>
                                    <li><a class="dropdown-item" href="./cart">Cart</a></li>
                                    <li><a class="dropdown-item" href="./checkout">Checkout</a></li>
                                    <li><a class="dropdown-item" href="./login2">Login</a></li>
                                    <li><a class="dropdown-item" href="./register2">Register</a></li>
                                    <li><a class="dropdown-item" href="./forgotten-password">Forgotten Password</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / Menu-->

                    </div>
                    <!-- / Main Navigation-->

                </div>
            </div>
        </div>
    </nav>
    <!-- / Navbar-->
    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 overflow-hidden ">
        <!-- Page Content Goes Here -->

        <!-- / Top banner -->
        <section class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden" data-aos="fade-in">
            <!-- Swiper Info -->
            <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
              "spaceBetween": 0,
              "slidesPerView": 1,
              "effect": "fade",
              "speed": 1000,
              "loop": true,
              "parallax": true,
              "observer": true,
              "observeParents": true,
              "lazy": {
                "loadPrevNext": true
                },
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
                }
              }'>
                <div class="swiper-wrapper">

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/banner-1.jpg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Everything You Need</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                <span class="text-outline-light">Summer</span> Essentials
                            </h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category" class="btn btn-psuedo text-white" role="button">Shop New Arrivals</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Slide-->

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/banner-2.jpg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Spring Collection</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                Adidas <span class="text-outline-light">SS21</span></h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category" class="btn btn-psuedo text-white" role="button">Shop Latest Adidas</a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide-->

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/banner-4.jpg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Just Do it</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                Nike <span class="text-outline-light">SS21</span></h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category" class="btn btn-psuedo text-white" role="button">Shop Latest Nike</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Slide-->

                    <!--Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/banner-3.jpg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Look Good Feel Good</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                <span class="text-outline-light">Sustainable</span> Fashion
                            </h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category.html" class="btn btn-psuedo text-white" role="button">Why We Are Different</a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide-->

                </div>

                <div class="swiper-pagination swiper-pagination-bullet-light"></div>

            </div>
            <!-- / Swiper Info-->
        </section>
        <!--/ Top Banner-->

        <!-- Featured Brands-->
        <div class="brand-section container-fluid" data-aos="fade-in">
            <div class="bg-overlay-sides-white-to-transparent bg-white py-5 py-md-7">
                <section class="marquee marquee-hover-pause">
                    <div class="marquee-body">
                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-1.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-2.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-3.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-4.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-5.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-6.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-7.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-8.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-9.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-1.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-2.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-3.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-4.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-5.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-6.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-7.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-8.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-9.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!--/ Featured Brands-->

        <div class="container-fluid">
            <!-- Homepage Intro-->
            <div class="position-relative row my-lg-7 pt-5 pt-lg-0 g-8">
                <div class="bg-text bottom-0 start-0 end-0" data-aos="fade-up">
                    <h2 class="bg-text-title opacity-10"><span class="text-outline-dark">Old</span>Skool</h2>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 mb-7 mb-lg-0" data-aos="fade-right">
                    <p class="text-muted title-small">Welcome</p>
                    <h3 class="display-3 fw-bold mb-5"><span class="text-outline-dark">OldSkool</span> - streetwear & footwear specialists</h3>
                    <p class="lead">We are OldSkool, a leading supplier of global streetwear brands, including names such as <a href="./category">Stussy</a>, <a href="./category">Carhartt</a>, <a href="./category">Gramicci</a>, <a href="./category">Afends</a> and many more.</p>
                    <p class="lead">With worldwide shipping and unbeatable prices - now's a great time to pick out something from our range.</p>
                    <a href="./category" class="btn btn-psuedo" role="button">Shop New Arrivals</a>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 pe-0" data-aos="fade-left">
                    <picture class="w-50 d-block position-relative z-index-10 border border-white border-4 shadow-lg">
                        <img class="img-fluid" src="{{asset('images/banners/banner-5.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-60 d-block me-8 mt-n10 shadow-lg border border-white border-4 position-relative z-index-20 ms-auto">
                        <img class="img-fluid" src="{{asset('images/banners/banner-6.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-50 d-block me-8 mt-n7 shadow-lg border border-white border-4 position-absolute top-0 end-0 z-index-0 ">
                        <img class="img-fluid" src="{{asset('images/banners/banner-7.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
            </div>
            <!-- / Homepage Intro-->

            <!-- Homepage Banners-->
            <div class="pt-7 mb-5 mb-lg-10">
                <div class="row g-4">
                    <div class="col-12 col-xl-6 position-relative" data-aos="fade-right">
                        <picture class="position-relative z-index-10">
                            <img class="w-100 rounded" src="{{asset('images/banners/banner-sale.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                        </picture>
                        <div class="position-absolute top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-center z-index-20">
                            <div class="py-6 px-5 px-lg-10 text-center w-100">
                                <h2 class="display-1 mb-3 fw-bold text-white"><span class="text-outline-light">Flash</span> Sale</h2>
                                <p class="fs-5 fw-light text-white d-none d-md-block">Our yearly flash sale is now on! Grab yourself a bargain from the world's leading streetwear brands.</p>
                                <a href="./category" class="btn btn-psuedo text-white" role="button">Shop All Sale Items</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6" data-aos="fade-left">
                        <div class="row g-4 justify-content-end">
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/banners/banner-8.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">The Jordan Delta 2</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop Kicks</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/banners/banner-9.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Latest Mens Shirts</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/banners/banner-10.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">KiiKii Osake Tees</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop T-Shirts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/banners/banner-11.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Multibuy Womens Shirts</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop Sale Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Homepage Banners-->
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
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-snapchat-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2021 OldSkool All Rights Reserved. Template by <a href="https://www.pixelrocket.store">Pixel Rocket</a></p>
                    <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <!-- / Footer-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{asset('js/theme.bundle.js')}}"></script>
    <script src="{{asset('js/vendor.bundle.js')}}"></script>
</body>

</html>