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
                @if(App\Models\Customer_couser::count()>0)
                    <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Class Name - Study Time <br>(Months)</th>
                                <th>Price ($)</th>
{{--                                <th>Teacher</th>--}}
                                <th>Purchase Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customer_couseres as  $customer_couser)
                                <tr>
                                    <td class="cart-pic first-row"><img src="front/img/{{$customer_couser->image}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{$customer_couser->class_name}}</h5>
                                    <td class="cart-title first-row">${{$customer_couser->price}}</td>
{{--                                    <td class="cart-title first-row">--}}
{{--                                        <h5>{{$customer_couser->teacher_name}}</h5>--}}
{{--                                    </td>--}}
                                    <td class="cart-title first-row">{{$customer_couser->created_at}} </td>
                                    @endforeach
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                @else
                    <div class="col-lg-12">
                        <h4>You have not registered for any courses yet.</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--Shopping Cart Section End -->

@endsection
