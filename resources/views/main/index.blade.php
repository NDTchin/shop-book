<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
<link rel="stylesheet" href="{{ asset('main/assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('main/assets/css/main.css') }}">
<img src="{{ asset('main/assets/img/logo.png') }}" alt="Logo">
<script src="{{ asset('main/assets/js/app.js') }}"></script>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="Bookle - Book Store WooCommerce Html Template ">
    <!-- ======== Page title ============ -->
    <title>Bookle - Book Store WooCommerce Html Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<!-- Preloader start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
            <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
            <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
            <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
            <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
            <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<!-- Back To Top start -->
<button id="back-top" class="back-to-top">
    <i class="fa-solid fa-chevron-up"></i>
</button>

<!-- Offcanvas Area start  -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ url('/index') }}">
                            <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                    feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="{{ url('/index') }}">Main Street, Melbourne, Australia</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:bookstoreaptech@example.com"><span
                                        class="mailto:bookstoreaptech@example.com">bookstoreaptech@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="{{ url('/index') }}">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">+11002345909</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="{{ url('/contact') }}" class="theme-btn text-center">
                            Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<div class="header-top-1">
    <div class="container">
        <div class="header-top-wrapper">
            <ul class="contact-list">
                <li>
                    <i class="fa-regular fa-phone"></i>
                    <a href="tel:0986.999.888">0986.999.888</a>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <a href="mailto:bookstoreaptech@example.com">bookstoreaptech@example.com</a>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <span>Sunday - Fri: 9 aM - 6 pM</span>
                </li>
            </ul>
            <ul class="list">
                <li><i class="fa-light fa-comments"></i><a href="{{ url('/contact') }}">Live Chat</a></li>
                <li><i class="fa-light fa-user"></i>
                    <button data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Sticky Header Section start  -->
<header class="header-1 sticky-header">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ url('/index') }}" class="header-logo">
                                    <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="{{ url('/index') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/shop') }}">
                                                    Shop
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/shop') }}">Shop Default</a></li>
                                                    <li><a href="{{ url('/shop-list') }}">Shop List</a></li>
                                                    <li><a href="{{ url('/shop-cart') }}">Shop Cart</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ url('/about') }}">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                                    <li class="has-dropdown">
                                                        <a href="{{ url('/team') }}">
                                                            Author
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ url('/team') }}">Author</a></li>
                                                            <li><a href="{{ url('/team-details') }}">Author Profile</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/news') }}">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/news-grid') }}">Blog Grid</a></li>
                                                    <li><a href="{{ url('/news') }}">Blog List</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Category
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Web Development
                                    </option>
                                    <option value="1">
                                        Graphic Design
                                    </option>
                                    <option value="1">
                                        Softwer Eng
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Author">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart">
                                <a href="{{ url('/wishlist') }}" class="cart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="{{ url('/shop-cart') }}" class="cart-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Header Section start  -->
<header class="header-1">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ url('/index') }}" class="header-logo">
                                    <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/index') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/shop') }}">
                                                    Shop
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/shop') }}">Shop Default</a></li>
                                                    <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                                                    <li><a href="{{ url('/shop-cart') }}">Shop Cart</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ url('/about') }}">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                                    <li class="has-dropdown">
                                                        <a href="{{ url('/team') }}">
                                                            Author
                                                            <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ url('/team') }}">Author</a></li>
                                                            <li><a href="{{ url('/team-details') }}">Author Profile</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ url('/404') }}">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/news') }}">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/news') }}">Blog List</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Category
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Web Development
                                    </option>
                                    <option value="1">
                                        Graphic Design
                                    </option>
                                    <option value="1">
                                        Softwer Eng
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Author">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart">
                                <a href="{{ url('/wishlist') }}" class="cart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="{{ url('/shop-cart') }}" class="cart-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close-btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="identityBox">
                    <div class="form-wrapper">
                        <h1 id="loginModalLabel">welcome back!</h1>
                        <input class="inputField" type="email" name="email" placeholder="Email Address">
                        <input class="inputField" type="password" name="password" placeholder="Enter Password">
                        <div class="input-check remember-me">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" class="form-check-input" name="save-for-next"
                                       id="saveForNext">
                                <label for="saveForNext">Remember me</label>
                            </div>
                            <div class="text"> <a href="{{ url('/index-2') }}">Forgot Your password?</a> </div>
                        </div>
                        <div class="loginBtn">
                            <a href="{{ url('/index-2') }}" class="theme-btn rounded-0"> Log in </a>
                        </div>
                        <div class="orting-badge">
                            Or
                        </div>
                        <div>
                            <a class="another-option" href="https://www.google.com/">
                                <img src="assets/img/google.png" alt="google">
                                Continue With Google
                            </a>
                        </div>
                        <div>
                            <a class="another-option another-option-two" href="https://www.facebook.com/">
                                <img src="assets/img/facebook.png" alt="google">
                                Continue With Facebook
                            </a>
                        </div>

                        <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label">
                                I Accept Your Terms & Conditions
                            </label>
                        </div>
                    </div>

                    <div class="banner">
                        <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Log in</button>
                        <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Create
                            Account</button>
                        <div class="loginBg">
                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1725012622/ugccxilcumo3jroncyuj.jpg" alt="signUpBg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Registration Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close-btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="identityBox">
                    <div class="form-wrapper">
                        <h1 id="registrationModalLabel">Create account!</h1>
                        <input class="inputField" type="text" name="name" id="name" placeholder="User Name">
                        <input class="inputField" type="email" name="email" placeholder="Email Address">
                        <input class="inputField" type="password" name="password" placeholder="Enter Password">
                        <input class="inputField" type="password" name="password"
                               placeholder="Enter Confirm Password">
                        <div class="input-check remember-me">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" class="form-check-input" name="save-for-next"
                                       id="rememberMe">
                                <label for="rememberMe">Remember me</label>
                            </div>
                            <div class="text"> <a href="{{ url('/index-2') }}">Forgot Your password?</a> </div>
                        </div>
                        <div class="loginBtn">
                            <a href="{{ url('/index-2') }}" class="theme-btn rounded-0"> Log in </a>
                        </div>
                        <div class="orting-badge">
                            Or
                        </div>
                        <div>
                            <a class="another-option" href="https://www.google.com/">
                                <img src="assets/img/google.png" alt="google">
                                Continue With Google
                            </a>
                        </div>
                        <div>
                            <a class="another-option another-option-two" href="https://www.facebook.com/">
                                <img src="assets/img/facebook.png" alt="google">
                                Continue With Facebook
                            </a>
                        </div>
                        <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label">
                                I Accept Your Terms & Conditions
                            </label>
                        </div>
                    </div>

                    <div class="banner">
                        <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Log in</button>
                        <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Create
                            Account</button>
                        <div class="signUpBg">
                            <img src="assets/img/registrationbg.jpg" alt="signUpBg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Section start  -->
<div class="hero-section hero-1 fix">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8 col-lg-6">
                <div class="hero-items">
                    <div class="book-shape">
                        <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724836848/dfary5vjv5c7lcp3g9rf.png" alt="shape-img">
                    </div>
                    <div class="frame-shape1 float-bob-x">
                        <img src="assets/img/hero/frame.png" alt="shape-img">
                    </div>
                    <div class="frame-shape2 float-bob-y">
                        <img src="assets/img/hero/frame-2.png" alt="shape-img">
                    </div>
                    <div class="frame-shape3">
                        <img src="assets/img/hero/xstar.png" alt="img">
                    </div>
                    <div class="frame-shape4 float-bob-x">
                        <img src="assets/img/hero/frame-shape.png" alt="img">
                    </div>
                    <div class="bg-shape1">
                        <img src="assets/img/hero/bg-shape.png" alt="img">
                    </div>
                    <div class="bg-shape2">
                        <img src="assets/img/hero/bg-shape2.png" alt="shape-img">
                    </div>
                    <div class="hero-content">
                        <h6 class="wow fadeInUp" data-wow-delay=".3s">Up to 30% Off</h6>
                        <h1 class="wow fadeInUp" data-wow-delay=".5s">Get Your New Book <br> With The Best Price
                        </h1>
                        <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                            <button type="submit" class="theme-btn">
                                Shop Now <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-xl-4 col-lg-6">
                <div class="girl-image">
                    <img class=" float-bob-x" src="https://res.cloudinary.com/dficfkyug/image/upload/v1724838146/bos5an7ce0mt7p9bxbzv.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature Section start  -->
<section class="feature-section fix section-padding">
    <div class="container">
        <div class="feature-wrapper">
            <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <i class="icon-icon-1"></i>
                </div>
                <div class="content">
                    <h3>Return & refund</h3>
                    <p>Money back guarantee</p>
                </div>
            </div>
            <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="icon-icon-2"></i>
                </div>
                <div class="content">
                    <h3>Secure Payment</h3>
                    <p>30% off by subscribing</p>
                </div>
            </div>
            <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="icon-icon-3"></i>
                </div>
                <div class="content">
                    <h3>Quality Support</h3>
                    <p>Always online 24/7</p>
                </div>
            </div>
            <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="icon-icon-4"></i>
                </div>
                <div class="content">
                    <h3>Daily Offers</h3>
                    <p>20% off by subscribing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop Section start  -->
<section class="shop-section section-padding fix pt-0">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Books</h2>
            </div>
            <a href="{{ url('/shop') }}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                    class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="swiper book-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/1" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723467899/cvddd2o3nroemgefnfyv.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/1">Tắt Đèn</a></h3>
                            <ul class="price-list">
                                <li>$2</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724381202/obs8hzx8uetyymw0zspc.jpg" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Ngô Tất Tố</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="shop-details/4" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723468175/nefxc9k0t6qohlokntwk.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/4">Đất Rừng Phương Nam</a></h3>
                            <ul class="price-list">
                                <li>$3</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724381240/txrhlqz88zp93n7xxkcy.jpg" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Đoàn Giỏi</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/11" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723468816/dnarf2rw4fffjbqk0q01.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/11">Cho Tôi Xin Một Vé Đi Tuổi Thơ</a></h3>
                            <ul class="price-list">
                                <li>$3</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724057665/z3zi2nhtq6coz3nkeazj.jpg" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Nguyễn Nhật Ánh</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/21" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723470357/hyvofxrldacv6jnbfahp.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/21">Dế Mèn Phiêu Lưu Ký</a></h3>
                            <ul class="price-list">
                                <li>$3</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724058196/rumjn7avlabno8bl6aea.jpg" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">Tô Hoài</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i

                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="shop-box-items style-2">
                        <div class="book-thumb center">
                            <a href="/shop-details/25" ><img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723470735/mkir0bdzeurqjgdmnqyj.jpg" alt="img" style="width: 200px; height: 242px;"></a>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-cart') }}">
                                        <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="/shop-details/25">Harry Potter</a></h3>
                            <ul class="price-list">
                                <li>$8</li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                        <span class="thumb">
                                            <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724381151/ontib1ih6o5dq3bmkx2d.jpg" alt="img" style="width: 30px; height: 30px;">
                                        </span>
                                    <span class="content">J.K. Rowling (dịch)</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a href="/shop-details/1" class="theme-btn"><i
                                    class="fa-solid fa-basket"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Book Catagories Section start  -->
<section class="book-catagories-section fix section-padding">
    <div class="container">
        <div class="book-catagories-wrapper">
            <div class="section-title text-center">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Categories Book</h2>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper book-catagories-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="book-catagories-items">
                            <div class="book-thumb">
                                <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723467899/cvddd2o3nroemgefnfyv.jpg" alt="img" style="width: 124px; height: 165px;">
                                <div class="circle-shape">
                                    <img src="assets/img/book-categori/circle-shape.png" alt="shape-img">
                                </div>
                            </div>
                            <div class="number"> 01 </div>
                            <h3><a href="{{ url('/shop') }}">Tiểu thuyết</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="book-catagories-items">
                            <div class="book-thumb">
                                <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723467991/mdjs3ykb5dy8qbhll4ac.webp" alt="img" style="width: 124px; height: 165px;">
                                <div class="circle-shape">
                                    <img src="assets/img/book-categori/circle-shape.png" alt="shape-img">
                                </div>
                            </div>
                            <div class="number"> 02 </div>
                            <h3><a href="{{ url('/shop') }}">Truyện ngắn</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="book-catagories-items">
                            <div class="book-thumb">
                                <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723468816/dnarf2rw4fffjbqk0q01.jpg" alt="img" style="width: 124px; height: 165px;">
                                <div class="circle-shape">
                                    <img src="assets/img/book-categori/circle-shape.png" alt="shape-img">
                                </div>
                            </div>
                            <div class="number"> 03 </div>
                            <h3><a href="{{ url('/shop') }}">Văn học hiện đại, thiếu nhi</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="book-catagories-items">
                            <div class="book-thumb">
                                <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723991069/ks2fwyo4evzodhvfd6to.jpg" alt="img" style="width: 124px; height: 165px;">
                                <div class="circle-shape">
                                    <img src="assets/img/book-categori/circle-shape.png" alt="shape-img">
                                </div>
                            </div>
                            <div class="number"> 04 </div>
                            <h3><a href="{{ url('/shop') }}">Khoa học viễn tưởng, Xã hội</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="book-catagories-items">
                            <div class="book-thumb">
                                <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1723973672/k2r6lqca1odsycqgite9.jpg" alt="img" style="width: 124px; height: 165px;">
                                <div class="circle-shape">
                                    <img src="assets/img/book-categori/circle-shape.png" alt="shape-img">
                                </div>
                            </div>
                            <div class="number"> 05 </div>
                            <h3><a href="{{ url('/shop') }}">Khoa học, vũ trụ học</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop Section start  -->
<section class="shop-section section-padding fix">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                <h2>Bookle Top Books</h2>
            </div>
            <a href="{{ url('/shop') }}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                    class="fa-solid fa-arrow-right-long"></i></a>
        </div>

    </div>
</section>

<!-- Cta Banner Section start  -->
<section class="cta-banner-section fix section-padding pt-0">
    <div class="container">
        <div class="cta-banner-wrapper section-padding bg-cover"
             style="background-image: url('{{ asset('assets/img/cta-banner.jpg') }}');">
            <div class="book-shape">
                <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724838458/cj7d2gujjddhkid1mbxv.png" alt="shape-img">
            </div>
            <div class="girl-shape float-bob-x">
                <img src="https://res.cloudinary.com/dficfkyug/image/upload/v1724838703/mdzcmewmxlaobre0pqgp.png" alt="shape-img">
            </div>
            <div class="cta-content text-center">
                <h2 class="mb-40 wow fadeInUp" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Get 25% discount
                    in all <br> kind of
                    super Selling</h2>
                <a href="{{ url('/shop') }}" class="theme-btn wow fadeInUp" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Shop Now <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Top Ratting Book Section start  -->
<section class="top-ratting-book-section fix section-padding section-bg">
    <div class="container">
        <div class="top-ratting-book-wrapper">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Rating Books</h2>
                </div>
                <a href="{{ url('/shop') }}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">View More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="row">
                @foreach( $products as $product )
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="top-ratting-box-items">
                        <div class="book-thumb">
                            <a href="{{ url('/shop-details') }}">
                                <img src="{{$product ->image}}" alt="img" style="width: 90px; height: 110px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="book-content">
                            <div class="title-header">
                                <div>
                                    <h5> Top </h5>
                                    <h3>
                                        <a href="{{ url('/shop-details') }}">{{$product ->name}}</a>
                                    </h3>
                                </div>
                                <ul class="shop-icon d-flex justify-content-center align-items-center">
                                    <li>
                                        <a href="{{ url('/shop-cart') }}"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/shop-cart') }}">
                                            <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/shop-details') }}"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <span class="mt-10">${{$product ->price}}</span>
                            <ul class="author-post">
                                <li class="authot-list">
                                    <span class="content mt-10">{{$product ->author}}</span>
                                </li>
                            </ul>
                            <div class="shop-btn">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="shop-btn">
                                <form action="{{ route('main.shop-cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="number" name="amount" style='color: black' value="1" min="1">
                                    <button type="submit" class="theme-btn">
                                        <i class="fa-solid fa-basket-shopping"></i> Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Shop Section start  -->


<!-- Testimonial Section start  -->

<!-- Team Section start  -->
<section class="team-section fix section-padding margin-bottom-30">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Featured Author</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">
                Interdum et malesuada fames ac ante ipsum primis in faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus
            </p>
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
            <button class="array-next"><i class="fal fa-arrow-right"></i></button>
        </div>
        <div class="swiper team-slider">
            <div class="swiper-wrapper">
                @foreach($authors as $author)
                    <div class="swiper-slide" style="display: flex; justify-content: center; align-items: center; height: auto;">
                        <div class="team-box-items" style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; padding: 15px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); background-color: #fff; border-radius: 10px; height: 100%;">
                            <div class="team-image" style="width: 100%; max-height: 200px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                                <div class="thumb">
                                    <img src="{{ $author->photo }}" alt="img" style="width: auto; max-width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                                </div>
                            </div>
                            <div class="team-content text-center" style="text-align: center; margin-top: 15px;">
                                <h6 style="margin: 10px 0; font-size: 18px; font-weight: 600;"><a href="{{ url('/team-details') }}">{{ $author->name }}</a></h6>
                                <p style="margin: 0; font-size: 14px; color: #666;">{{ $author->published_books }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- News Section start  -->
<section class="news-section fix section-padding section-bg">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our Latest News</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
        </div>
        <div class="row">
            @foreach($events as $event)
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ $event -> image }}" alt="img">
                        <div class="post-box">
                            Activities
                        </div>
                    </div>
                    <div class="news-content">
                        <ul>
                            <li>
                                <i class="fa-light fa-calendar-days"></i>
                                {{ $event -> start_time }} - {{ $event -> end_time }}
                            </li>
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                        </ul>
                        <h3><a href="{{ url('/news') }}">{{ $event -> name }}</a></h3>
                        <a href="{{ url('/news') }}" class="theme-btn-2">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Footer Section Start -->
<footer class="footer-section footer-bg">
    <div class="container">
        <div class="contact-info-area">
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <i class="icon-icon-5"></i>
                </div>
                <div class="content">
                    <p>Call Us 7/24</p>
                    <h3>
                        <a href="tel:0986.999.888">0986.999.888</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="icon-icon-6"></i>
                </div>
                <div class="content">
                    <p>Make a Quote</p>
                    <h3>
                        <a href="mailto:bookstoreaptech@gmail.com">bookstoreaptech@gmail.com</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="icon-icon-7"></i>
                </div>
                <div class="content">
                    <p>Opening Hour</p>
                    <h3>
                        Sunday - Fri: 9 aM - 6 pM
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="icon-icon-8"></i>
                </div>
                <div class="content">
                    <p>Location</p>
                    <h3>
                        8 Tôn Thất Thuyết - Mỹ Đình, Cầu Giấy, Hà Nội.
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widgets-wrapper">
        <div class="plane-shape float-bob-y">
            <img src="assets/img/plane-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{ url('/index') }}">
                                <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>

                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Costumers Support</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ url('/about') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Opening Hours
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Categories</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ url('/shop') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Shop
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/shop-list') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Shop List
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/shop-cart') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Shop Cart
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Newsletter</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ url('/news') }}">
                                    <i class="fa-solid fa-chevrons-right"></i>
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <div class="footer-content">
                            <p>Sign up to searing weekly newsletter to get the latest updates.</p>
                            <div class="footer-input">
                                <input type="email" id="email21" placeholder="Enter Email Address">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    © All Copyright 2024 by <a href="{{ url('/index') }}">Bookle</a>
                </p>
                <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/contact') }}">
                            <img src="assets/img/visa-logo.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">
                            <img src="assets/img/mastercard.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">
                            <img src="assets/img/payoneer.png" alt="img">
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">
                            <img src="assets/img/affirm.png" alt="img">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--<< All JS Plugins >>-->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!--<< Viewport Js >>-->
<script src="assets/js/viewport.jquery.js"></script>
<!--<< Bootstrap Js >>-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!--<< Waypoints Js >>-->
<script src="assets/js/jquery.waypoints.js"></script>
<!--<< Counterup Js >>-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--<< Swiper Slider Js >>-->
<script src="assets/js/swiper-bundle.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!--<< Magnific Popup Js >>-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="assets/js/wow.min.js"></script>
<!-- Gsap -->
<script src="assets/js/gsap.min.js"></script>
<!--<< Main.js >>-->
<script src="assets/js/main.js"></script>
</body>

</html>
