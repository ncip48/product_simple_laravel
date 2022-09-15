@extends('layouts.app')

@section('title', 'Cart')
@section('content')

    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cart_page_bg">
        <div class="container">
            <div class="shopping_cart_area">
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $cart)
                                                <tr>
                                                    <td class="product_remove"><a href="#"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="{{ asset('assets/img/' . $cart->image) }}"
                                                                alt=""></a>
                                                    </td>
                                                    <td class="product_name"><a href="#">{{ $cart->name }}¥</a></td>
                                                    <td class="product-price">
                                                        {{ number_format($cart->price, 0, ',', '.') }}¥</td>
                                                    <td class="product_quantity"><label>Quantity</label> <input
                                                            min="1" max="100" value="{{ $cart->qty }}"
                                                            type="number">
                                                    </td>
                                                    <td class="product_total">
                                                        {{ number_format($cart->total, 0, ',', '.') }}¥</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <button type="submit">update cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Coupon</h3>
                                    <div class="coupon_inner">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart_amount">{{ number_format($cart_total, 0, ',', '.') }}¥</p>
                                        </div>
                                        <div class="cart_subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart_amount"><span>Flat
                                                    Rate:</span>{{ number_format(0, 0, ',', '.') }}¥</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>

                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount">{{ number_format($cart_total, 0, ',', '.') }}¥</p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="{{ url('checkout') }}">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area end-->
                </form>
            </div>
        </div>
    </div>
@endsection
