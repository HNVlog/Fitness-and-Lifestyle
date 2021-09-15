@extends('front.layout.master')

@section('title','Shopping Cart')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__widget">
                            <a href="./">Home</a>
                            <span>Shopping-Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!--Shopping Cart Section Begin -->
    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                @if(Cart::count()>0)
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Class name</th>
                                    <th>Price</th>
                                    <th>Study time <br>(months)</th>
                                    <th>Total</th>
                                    <th><i onclick="confirm('Are you sure?') === true ? window.location='./cart/destroy':''"
                                           class="ti-close"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)
                                    <tr>
                                        <td class="cart-pic first-row"><img src="front/img/{{$cart->options->images[0]->path}}" alt=""></td>
                                        <td class="cart-title filter-row">
                                            <h5><strong>{{$cart->name}}</strong></h5>
                                        </td>
                                        <td class="p-price filter-row">${{$cart->price}}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}" readonly>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">${{number_format($cart->price * $cart->qty,2)}}</td>
                                        <td class="close-td first-row"><i onclick="window.location='./cart/delete/{{$cart->rowId}}'" class="ti-close"></i></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cart-buttons">
                                    <a href="./classes" class="primary-btn continue-shop">Continue Shopping</a>
                                    <a href="./classes" class="primary-btn up-cart">Update Cart</a>
                                </div>
                                <div class="discount-coupon">
                                    <h6>Discount Codes</h6>
                                    <form action="#" class="coupon-form">
                                        <input type="text" placeholder="Enter your codes">
                                        <button type="submit" class="site-btn coupon-btn">Apply</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-4">
                                <div class="proceed-checkout">
                                    <ul>
                                        <li class="subtotal">Subtotal <span>${{$total}}</span></li>
                                        <li class="cart-total">Total <span>${{$subtotal}}</span></li>
                                    </ul>
                                    <a href="./check_out" class="proceed-btn">PROCEED TO CHECK OUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-12">
                        <h4>Your cart is empty.</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--Shopping Cart Section End -->

@endsection
