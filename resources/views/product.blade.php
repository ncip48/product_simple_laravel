@extends('layouts.app')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>shop list</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h3>Product categories</h3>
                            <ul>
                                <li><a href="#">Cameras & Camcoders</a></li>
                                <li class="widget_sub_categories"><a href="javascript:void(0)">Computer &
                                        Networking</a>
                                    <ul class="widget_dropdown_categories">
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Networking</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Games & Consoles</a></li>
                                <li><a href="#">Headphone & Speaker</a></li>
                                <li><a href="#">Movies & Video Games</a></li>
                                <li><a href="#">Smartphone</a> </li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h3>Filter by price</h3>
                            <form action="#">
                                <div id="slider-range"></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />

                            </form>
                        </div>
                        <div class="widget_list">
                            <h3>Compare Products</h3>
                            <div class="recent_product_container">
                                <article class="recent_product_list">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product10.jpg" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="product-details.html">Aliquam lobortis pellentesque</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$65.00</span>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                                <article class="recent_product_list">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product11.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product12.jpg" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="product-details.html">Convallis quam sit vitae sodales</a>
                                            </h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$65.00</span>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                                <article class="recent_product_list">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product14.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product13.jpg" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4><a href="product-details.html">Cillum dolore nisl fermentum</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$65.00</span>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        </div>
                        <div class="widget_list tags_widget">
                            <h3>Product tags</h3>
                            <div class="tag_cloud">
                                <a href="#">blouse</a>
                                <a href="#">clothes</a>
                                <a href="#">fashion</a>
                                <a href="#">handbag</a>
                                <a href="#">laptop</a>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <div class="row no-gutters shop_wrapper grid_list">
                        @foreach ($products as $product)
                            <div class="col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ url('detail/' . $product->slug) }}"><img
                                                    src="{{ asset('assets/img/' . $product->image) }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            data-tippy-placement="top" data-tippy-arrow="true"
                                                            data-tippy-inertia="true" data-tippy="Add to Wishlist"><i
                                                                class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-tippy="Add to Compare"><i
                                                                class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-bs-toggle="modal" data-bs-target="#modal_box"
                                                            data-tippy="quick view"><i
                                                                class="ion-ios-search-strong"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content list_content">
                                            <h4 class="product_name"><a
                                                    href="{{ url('detail/' . $product->slug) }}">{{ $product->name }}</a>
                                            </h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">{{ $product->price }}</span>
                                            </div>
                                            <div class="product_desc">
                                                <p>{{ $product->description }}</p>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
@endsection
