@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            {{-- <li>shop list</li> --}}
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
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Website</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">UI/UX</a></li>
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
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <div class="row no-gutters shop_wrapper grid_list">
                        @foreach ($products as $product)
                            <div class="col-12 ">
                                <article class="single_product {{ $product->is_stock == 0 ? 'bg-gray' : '' }}">
                                    <figure>
                                        <div class="product_thumb">
                                            <img src="{{ asset('assets/img/' . $product->image) }}" alt="">
                                            @if ($product->is_stock == 0)
                                                <div class="ribbon ribbon-top-left"><span>Sold out</span></div>
                                            @endif
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-tippy="Add to Wishlist"><i
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
                                            @if ($product->is_stock == 0)
                                                <h4 class="product_name">{{ $product->name }}
                                                </h4>
                                            @else
                                                <h4 class="product_name"><a
                                                        href="{{ url('detail/' . $product->slug) }}">{{ $product->name }}</a>
                                                </h4>
                                            @endif
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
                                                <span
                                                    class="current_price">{{ number_format($product->price, 0, ',', '.') }}¥</span>
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
