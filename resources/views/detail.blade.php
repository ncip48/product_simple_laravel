@extends('layouts.app')

@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>product details</li>
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
                                <form action="#">

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
                                        <span class="current_price">{{ $product->price }}</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="product_variant quantity">
                                        <div id="paypal-button-container"></div>
                                    </div>
                                    <div class=" product_d_action">
                                        <ul>
                                            <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                            <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                        </ul>
                                    </div>
                                    <div class="product_meta">
                                        <span>Category: <a href="#">Clothing</a></span>
                                    </div>

                                </form>
                                <div class="priduct_social">
                                    <ul>
                                        <li><a class="facebook" href="#" title="facebook"><i
                                                    class="fa fa-facebook"></i> Like</a></li>
                                        <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i>
                                                tweet</a></li>
                                        <li><a class="pinterest" href="#" title="pinterest"><i
                                                    class="fa fa-pinterest"></i> save</a></li>
                                        <li><a class="google-plus" href="#" title="google +"><i
                                                    class="fa fa-google-plus"></i> share</a></li>
                                        <li><a class="linkedin" href="#" title="linkedin"><i
                                                    class="fa fa-linkedin"></i> linked</a></li>
                                    </ul>
                                </div>

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

@push('customScript')
    <script
        src="https://www.paypal.com/sdk/js?client-id=AfxRc3Q8vRvQPK_qm2k4firweuC2r7EKMErp7zUJCjy8wSTeSfkgkPahdSmyQZlikcggyluUlWAtHjfa&vault=true&intent=subscription"
        data-sdk-integration-source="button-factory"></script>
    <script>
        const plan_id = "{{ $product->plan_id }}"

        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'subscribe'
            },
            createSubscription: function(data, actions) {
                return actions.subscription.create({
                    /* Creates the subscription */
                    plan_id: plan_id
                });
            },
            onApprove: function(data, actions) {
                alert(data.subscriptionID); // You can add optional success message for the subscriber here
            }
        }).render('#paypal-button-container'); // Renders the PayPal button
    </script>
@endpush
