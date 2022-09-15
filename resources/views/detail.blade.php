@extends('layouts.app')

@section('title', 'Detail Product')
@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li>product details</li>
                            <li>{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product_page_bg">
        <div class="container">
            <div class="product_details_wrapper mb-55">
                <!--product details start-->
                <div class="product_details">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product-details-tab">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        <img id="zoom1" src="{{ asset('assets/img/' . $product->image) }}"
                                            data-zoom-image="{{ asset('assets/img/' . $product->image) }}" alt="big-1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_d_right">
                                <form action="{{ url('cart') }}" method="POST">
                                    @csrf
                                    <h3><a href="#">{{ $product->name }}</a></h3>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li class="review"><a href="#">(1 customer review )</a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span
                                            class="current_price">{{ number_format($product->price, 0, ',', '.') }}¥</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    {{-- <div class="product_variant quantity">
                                        <div id="paypal-button-container"></div>
                                    </div> --}}
                                    <div class="product_variant quantity">
                                        <label>quantity</label>
                                        <input min="1" max="100" value="1" type="number">
                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                        <button class="button" type="submit">add to cart</button>

                                    </div>
                                    <div class=" product_d_action">
                                        <ul>
                                            <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                    <div class="product_meta">
                                        <span>Category: <a href="#">Website, HTML5</a></span>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!--product details end-->

                <!--product info start-->
                <div class="product_d_info">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">
                                <div class="product_info_button">
                                    <ul class="nav" role="tablist" id="nav-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#info" role="tab"
                                                aria-controls="info" aria-selected="true">Description</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                                aria-selected="false" class="">Specification</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                                aria-selected="false" class="">Reviews (1)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="info" role="tabpanel">
                                        <div class="product_info_content">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sheet" role="tabpanel">
                                        <div class="product_d_table">
                                            <form action="#">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first_child">Compositions</td>
                                                            <td>Polyester</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Styles</td>
                                                            <td>Girly</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Properties</td>
                                                            <td>Short Dress</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand
                                                offers feminine designs delivering stylish separates and statement dresses
                                                which have since evolved into a full ready-to-wear collection in which every
                                                item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                                looks with youthful elegance and unmistakable signature style. All the
                                                beautiful pieces are made in Italy and manufactured with the greatest
                                                attention. Now Fashion extends to a range of accessories including shoes,
                                                hats, belts and more!</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="reviews_wrapper">
                                            <h2>1 review for Donec eu furniture</h2>
                                            <div class="reviews_comment_box">
                                                <div class="comment_thmb">
                                                    <img src="assets/img/blog/comment2.jpg" alt="">
                                                </div>
                                                <div class="comment_text">
                                                    <div class="reviews_meta">
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p><strong>admin </strong>- September 12, 2018</p>
                                                        <span>roadthemes</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="comment_title">
                                                <h2>Add a review </h2>
                                                <p>Your email address will not be published. Required fields are marked </p>
                                            </div>
                                            <div class="product_rating mb-10">
                                                <h3>Your rating</h3>
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
                                            <div class="product_review_form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">Your review </label>
                                                            <textarea name="comment" id="review_comment"></textarea>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="author">Name</label>
                                                            <input id="author" type="text">

                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="email">Email </label>
                                                            <input id="email" type="text">
                                                        </div>
                                                    </div>
                                                    <button type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product info end-->
            </div>
        </div>
    </div>
@endsection
