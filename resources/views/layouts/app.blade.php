<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Antomi - shop list</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="search_container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('shop') }}">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('account') }}">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('about') }}">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('about') }}"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    <!--header area start-->
    <header>
        <div class="main_header header_padding">
            <div class="container">

                <!--header middel start-->
                <div class="header_middle sticky-header">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="main_menu menu_position text-end">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="{{ url('/') }}">home</i></a></li>
                                        <li><a href="{{ url('shop') }}">shop</i></a></li>
                                        <li><a href="{{ url('account') }}">My Account</a></li>
                                        <li><a href="{{ url('about') }}">About Us</a></li>
                                        <li><a href="{{ url('contact') }}"> Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-7 col-6">
                            <div class="header_configure_area">
                                {{-- <div class="header_wishlist">
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>
                                        <span class="wishlist_count">3</span>
                                    </a>
                                </div> --}}
                                @auth
                                    <div class="mini_cart_wrapper" id="mini_cart_wrapper">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-shopping-bag"></i>
                                            <span class="cart_price">$152.00 <i class="ion-ios-arrow-down"></i></span>
                                            <span class="cart_count">2</span>

                                        </a>
                                    </div>
                                @endauth
                                @guest
                                    <div class="mini_cart_wrapper">
                                        <a href="{{ url('login') }}">
                                            <i class="fa fa-user"></i>
                                            <span class="cart_price">Login/Register</span>
                                        </a>
                                    </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel end-->

                <!--mini cart-->
                <div class="mini_cart">
                    <div class="cart_close">
                        <div class="cart_text">
                            <h3>cart</h3>
                        </div>
                        <div class="mini_cart_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_img">
                            <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                        </div>
                        <div class="cart_info">
                            <a href="#">Primis In Faucibus</a>
                            <p>Qty: 1 X <span> $60.00 </span></p>
                        </div>
                        <div class="cart_remove">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="cart_img">
                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                        </div>
                        <div class="cart_info">
                            <a href="#">Letraset Sheets</a>
                            <p>Qty: 1 X <span> $60.00 </span></p>
                        </div>
                        <div class="cart_remove">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div class="mini_cart_table">
                        <div class="cart_total">
                            <span>Sub total:</span>
                            <span class="price">$138.00</span>
                        </div>
                        <div class="cart_total mt-10">
                            <span>total:</span>
                            <span class="price">$138.00</span>
                        </div>
                    </div>
                    <div class="mini_cart_footer">
                        <div class="cart_button">
                            <a href="cart.html">View cart</a>
                        </div>
                        <div class="cart_button">
                            <a class="active" href="checkout.html">Checkout</a>
                        </div>

                    </div>
                </div>
                <!--mini cart end-->


                <!--header bottom satrt-->
                <div class="header_bottom">
                    <div class="row align-items-center">
                        <div class="column1 col-lg-3 col-md-6">
                            <div class="categories_menu categories_three">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <li class="menu_item_children"><a href="#">Brake Parts <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu">
                                                <li class="menu_item_children"><a href="#">Dresses</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Sweater</a></li>
                                                        <li><a href="">Evening</a></li>
                                                        <li><a href="">Day</a></li>
                                                        <li><a href="">Sports</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Handbags</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Shoulder</a></li>
                                                        <li><a href="">Satchels</a></li>
                                                        <li><a href="">kids</a></li>
                                                        <li><a href="">coats</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">shoes</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Ankle Boots</a></li>
                                                        <li><a href="">Clog sandals </a></li>
                                                        <li><a href="">run</a></li>
                                                        <li><a href="">Books</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Clothing</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Coats Jackets </a></li>
                                                        <li><a href="">Raincoats</a></li>
                                                        <li><a href="">Jackets</a></li>
                                                        <li><a href="">T-shirts</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Wheels & Tires <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu column_3">
                                                <li class="menu_item_children"><a href="#">Chair</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Dining room</a></li>
                                                        <li><a href="">bedroom</a></li>
                                                        <li><a href=""> Home & Office</a></li>
                                                        <li><a href="">living room</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Lighting</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Ceiling Lighting</a></li>
                                                        <li><a href="">Wall Lighting</a></li>
                                                        <li><a href="">Outdoor Lighting</a></li>
                                                        <li><a href="">Smart Lighting</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Sofa</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Fabric Sofas</a></li>
                                                        <li><a href="">Leather Sofas</a></li>
                                                        <li><a href="">Corner Sofas</a></li>
                                                        <li><a href="">Sofa Beds</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Furnitured & Decor <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu column_2">
                                                <li class="menu_item_children"><a href="#">Brake Tools</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Driveshafts</a></li>
                                                        <li><a href="">Spools</a></li>
                                                        <li><a href="">Diesel </a></li>
                                                        <li><a href="">Gasoline</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Dolls for Girls</a></li>
                                                        <li><a href="">Girls' Learning Toys</a></li>
                                                        <li><a href="">Arts and Crafts for Girls</a></li>
                                                        <li><a href="">Video Games for Girls</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu_item_children"><a href="#"> Turbo System <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu column_2">
                                                <li class="menu_item_children"><a href="#">Check Trousers</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Building</a></li>
                                                        <li><a href="">Electronics</a></li>
                                                        <li><a href="">action figures </a></li>
                                                        <li><a href="">specialty & boutique toy</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_item_children"><a href="#">Calculators</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="">Dolls for Girls</a></li>
                                                        <li><a href="">Girls' Learning Toys</a></li>
                                                        <li><a href="">Arts and Crafts for Girls</a></li>
                                                        <li><a href="">Video Games for Girls</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> Lighting</a></li>
                                        <li><a href="#"> Accessories</a></li>
                                        <li><a href="#">Body Parts</a></li>
                                        <li><a href="#">Networking</a></li>
                                        <li><a href="#">Perfomance Filters</a></li>
                                        <li><a href="#"> Engine Parts</a></li>
                                        <li class="hidden"><a href="#">New Sofas</a></li>
                                        <li class="hidden"><a href="#">Sleight Sofas</a></li>
                                        <li><a href="#" id="more-btn"><i class="fa fa-plus"
                                                    aria-hidden="true"></i> More Categories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="column2 col-lg-6 ">
                            <div class="search_container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="column3 col-lg-3 col-md-6">
                            <div class="header_bigsale">
                                <a href="#">BIG SALE BLACK FRIDAY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header bottom end-->
            </div>
        </div>
    </header>
    <!--header area end-->

    @yield('content')

    <!--footer area start-->
    <footer class="footer_widgets">
        <!--newsletter area start-->
        <div class="newsletter_area">
            <div class="container">
                <div class="newsletter_inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="newsletter_sing_up">
                                <h3>Newsletter Sign Up</h3>
                                <p>(Get <span>30% OFF</span> coupon today subscibers)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="subscribe_content">
                                <p><strong>Join 226.000+ subscribers</strong> and get a new discount coupon on every
                                    Monday.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off"
                                        placeholder="Your email address..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter area end-->
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="widgets_container contact_us">
                            <h3>GET THE APP</h3>
                            <div class="aff_content">
                                <p><strong>ANTOMI</strong> App is now available on Google Play & App Store. Get it now.
                                </p>
                            </div>
                            <div class="app_img">
                                <figure class="app_img">
                                    <a href="#"><img src="assets/img/icon/icon-appstore.png"
                                            alt=""></a>
                                </figure>
                                <figure class="app_img">
                                    <a href="#"><img src="assets/img/icon/icon-googleplay.png"
                                            alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">International Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-12">
                        <div class="widgets_container">
                            <h3>CONTACT INFO</h3>
                            <div class="footer_contact">
                                <div class="footer_contact_inner">
                                    <div class="contact_icone">
                                        <img src="assets/img/icon/icon-phone.png" alt="">
                                    </div>
                                    <div class="contact_text">
                                        <p>Hotline Free 24/24: <br> <strong>0123456789</strong></p>
                                    </div>
                                </div>
                                <p>Your address goes here. <br> demo@example.com</p>
                            </div>

                            <div class="footer_social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>&copy; 2021 <a href="index.html" class="text-uppercase">ANTOMI</a>. Made with <i
                                    class="fa fa-heart"></i> by <a target="_blank"
                                    href="https://www.hasthemes.com">HasThemes</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <img src="assets/img/icon/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig5.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1"
                                                    role="tab" aria-controls="tab1" aria-selected="false"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="assets/img/product/product14.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1"
                                                    type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest"><a href="#"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('customScript')



</body>

</html>