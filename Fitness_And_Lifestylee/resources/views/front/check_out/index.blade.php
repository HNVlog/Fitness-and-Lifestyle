@extends('front.layout.master')

@section('title','Check Out')

@section('body')

    <section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Check-Out</h2>
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
            <div class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="./login" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Billing Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="fir"> Name <span>*</span></label>
                                <input type="text" id="fir" name="first_name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Email</label>
                                <input type="email" id="cun-name" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}">
                            </div>
                            <div class="col-lg-12">
                                <label for="phone">Phone <span>*</span></label>
                                <input type="text" id="phone" name="phone" value="{{ \Illuminate\Support\Facades\Auth::user()->phone }}">
                            </div>
                            <div class="col-lg-12">
                                <label for="address">Address <span>*</span></label>
                                <input type="text" id="address" name="address" value="{{ \Illuminate\Support\Facades\Auth::user()->address }}">
                            </div>
                            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">

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
                                        <p hidden class="product-image">{{$cart->options->images[0]->path}}</p>
                                        <p hidden class='product-name'>{{$cart->name}}  -  {{$cart->qty}} Months</p>
                                        <li class="fw-normal">{{$cart->name}}  -  {{$cart->qty}} Months
                                            <span class="product-qty">${{$cart->price * $cart->qty}}</span></li>
                                    @endforeach

                                    <li class="fw-normal">Subtotal <span>${{$subtotal}}</span></li>
                                    <li class="total-price">Total <span>${{$total}}</span></li>
                                </ul>

                                <div class="order-btn">
                                    <button class="site-btn place-btn" onclick="CheckOut()">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <script>
                            function CheckOut(){
                                // get product names
                                var productNames = []
                                for(let i = 0; i< $(".product-name").length;i++){
                                    productNames.push($(".product-name")[i].textContent);
                                }

                                // get prices
                                var prices = []
                                for(let i = 0; i< $(".product-qty").length;i++){
                                    let price = parseFloat($(".product-qty")[i].textContent.replace("$", ""));
                                    prices.push(price);
                                }

                                // get images
                                var images = []
                                for (let i = 0; i< $(".product-image").length;i++){
                                    images.push($(".product-image")[i].innerHTML);
                                }

                                // get TeacherNames
                                // var TeacherNames = []
                                // for(let i = 0; i< $(".icon_id").length;i++){
                                //     productNames.push($(".icon_id")[i].textContent);
                                // }
                                // 'classes/classes-details/detail1.jpg'

                                var add = new Date();
                                for (let index = 0; index < productNames.length ; index++) {
                                    var body={
                                        {{--user_id:"{{ \Illuminate\Support\Facades\Auth::user()->id }}",--}}
                                        user_id:2,
                                        // name:,
                                        image: images[index],
                                        // level:0,
                                        class_name: productNames[index],
                                        // teacher_name:'vcd',
                                        price: prices[index],
                                        _token: $("#csrf").val(),
                                        // first_name: 'Nguyen',
                                        // last_name: 'tam',
                                        // email: 'tam@gmail.com',
                                        // phone: '12345',
                                        // address: 'ha noi',
                                        // order_id: 1,
                                        // price: 100.00,
                                    };
                                    $.ajax({
                                        type:"POST",
                                        url:"/your_course/add/{{ \Illuminate\Support\Facades\Auth::user()->id }}",
                                        data:body,
                                        success:function (response){
                                            alert('Update successful!!!');
                                            console.log(response);
                                            // location.reload();
                                        },
                                        error:function (error){
                                            alert('Update failed.')
                                            console.log(error);
                                        }
                                    })
                                }
                                location.href = location.origin + "/check_out";

                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
