@extends('front.layout.master')

@section('title','Check Out')

@section('body')

    <section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__widget">
                            <a href="./">Home</a>
                            <span>Check-Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout-section spad">
        <div class="container">
            <form action="" method="post" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="./login" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name <span>*</span></label>
                                <input type="text" id="fir" name="first_name">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name <span>*</span></label>
                                <input type="text" id="last" name="last_name">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Email <span>*</span></label>
                                <input type="email" id="cun-name" name="email">
                            </div>

                            <div class="col-lg-12">
                                <label for="phone">Phone <span>*</span></label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div class="col-lg-12">
                                <label for="address">Address <span>*</span></label>
                                <input type="text" id="address" name="address">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>

                                    @foreach($carts as $cart)
                                        <li class="fw-normal">{{$cart->name}}  -  {{$cart->qty}} Months
                                            <span>${{$cart->price * $cart->qty}}</span></li>
                                    @endforeach

                                    <li class="fw-normal">Subtotal <span>${{$subtotal}}</span></li>
                                    <li class="total-price">Total <span>${{$total}}</span></li>
                                </ul>

                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
