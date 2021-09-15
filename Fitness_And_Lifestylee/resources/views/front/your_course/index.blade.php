@extends('front.layout.master')

@section('title','Your Course')

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
                            <span>Your-Course</span>
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
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Teacher</th>
                                <th>Price</th>
                                <th>Purchase date</th>
                                <th>Status</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="cart-pic first-row"><img src="front/img/classes/classes-1.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5><strong>Yoga for beginners</strong></h5>
                                    </td>
                                    <td class="total-price first-row"><strong>$60.00</strong></td>
                                    <td class="qua-col filter-row">
                                        <strong>1</strong>
                                    </td>
                                    <td class="p-price filter-row">1</td>
                                    <td class="total-price first-row"><strong>5:00</strong></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Section End -->

@endsection
