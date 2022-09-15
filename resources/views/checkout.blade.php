@extends('layouts.app')

@section('title', 'Checkout')
@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="checkout_page_bg">
        <div class="container">
            <div class="Checkout_section">
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_left">
                                <form action="#">
                                    <h3>Billing Details</h3>
                                    <div class="row">

                                        <div class="col-lg-6 mb-20">
                                            <label>First Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Last Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="country">country <span>*</span></label>
                                            <select class="niceselect_option" name="cuntry" id="country"
                                                style="display: none;">
                                                <option value="2">bangladesh</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Ghana</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Bahrain</option>
                                                <option value="8">Colombia</option>
                                                <option value="9">Dominican Republic</option>

                                            </select>
                                            <div class="nice-select niceselect_option" tabindex="0"><span
                                                    class="current">bangladesh</span>
                                                <ul class="list">
                                                    <li data-value="2" class="option selected">bangladesh</li>
                                                    <li data-value="3" class="option">Algeria</li>
                                                    <li data-value="4" class="option">Afghanistan</li>
                                                    <li data-value="5" class="option">Ghana</li>
                                                    <li data-value="6" class="option">Albania</li>
                                                    <li data-value="7" class="option">Bahrain</li>
                                                    <li data-value="8" class="option">Colombia</li>
                                                    <li data-value="9" class="option">Dominican Republic</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Street address <span>*</span></label>
                                            <input placeholder="House number and street name" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Town / City <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>State / County <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone<span>*</span></label>
                                            <input type="text">

                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label> Email Address <span>*</span></label>
                                            <input type="text">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_right">
                                <form action="#">
                                    <h3>Your order</h3>
                                    <div class="order_table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> {{ $cart->name }} <strong> × {{ $cart->qty }}</strong></td>
                                                    <td> {{ number_format($cart->total, 0, ',', '.') }}¥</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Cart Subtotal</th>
                                                    <td>{{ number_format($cart->total, 0, ',', '.') }}¥</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td><strong>{{ number_format(0, 0, ',', '.') }}¥</strong></td>
                                                </tr>
                                                <tr class="order_total">
                                                    <th>Order Total</th>
                                                    <td><strong>{{ number_format($cart->total, 0, ',', '.') }}¥</strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment_method">
                                        {{-- <div class="panel-default">
                                            <input id="payment" name="check_method" type="radio"
                                                data-target="createp_account">
                                            <label for="payment" data-bs-toggle="collapse" data-bs-target="#method"
                                                aria-controls="method">Create an account?</label>

                                            <div id="method" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-default">
                                            <input id="payment_defult" name="check_method" type="radio"
                                                data-target="createp_account">
                                            <label for="payment_defult" data-bs-toggle="collapse"
                                                data-bs-target="#collapsedefult" aria-controls="collapsedefult">PayPal
                                                <img src="assets/img/icon/papyel.png" alt=""></label>

                                            <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                        PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_button">
                                            <button type="submit">Proceed to PayPal</button>
                                        </div> --}}
                                        <div class="order_button">
                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('customScript')
    <script
        src="https://www.paypal.com/sdk/js?client-id=AfxRc3Q8vRvQPK_qm2k4firweuC2r7EKMErp7zUJCjy8wSTeSfkgkPahdSmyQZlikcggyluUlWAtHjfa&vault=true&intent=subscription"
        data-sdk-integration-source="button-factory"></script>
    <script>
        const plan_id = "{{ $cart->plan_id }}"

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
