
@extends('front.layout.master')

@section('title','Home')

@section('body')

<section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Pricing</h2>
                    <div class="breadcrumb__widget">
                        <a href="index.html">Home</a>
                        <span>Pricing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pricing spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title normal-title">
                    <h2>Our Pricing</h2>
                    <p>Yoga is popular with people with arthritis for its gentle way of <br />promoting flexibility
                        and strength.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($classProducts as $classProduct)
            <div class="col-lg-4 p-0 col-md-6">
                <div class="pricing__item active set-bg" data-setbg="front/img/pricing/price-bg-2.png">
                    <div class="pricing__item__star">
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>{{ $classProduct->name }}</h4>
                    <div class="pricing__item__price">
                        <img src="front/img/{{ $classProduct->productImages[0]->path }}" width="370" height="241" alt="">
                    </div>
                    <ul>
                        <li><h2>${{ $classProduct->price }}</h2></li>
                                {{--noidung--}}
                        <li>{{ $classProduct->content }}</li>
                        <li>{{ $classProduct->study_date }} </li>
                        <li>{{ $classProduct->teacher }}</li>
                        <li> {{ $classProduct->study_time }}</li>
                    </ul>
                    <a href="shopping-cart.html" class="primary-btn">BUY NOW</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="appointment">
    <div class="container">
        <div class="appointment__text">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="front/img/xicon-white.png.pagespeed.ic.OrpDFMxZNh.png" alt="">
                        <h2>Make An Appointment</h2>
                    </div>
                </div>
            </div>
            <form action="#" class="appointment__form">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Phone">
                    </div>
                    <div class="col-lg-6">
                        <select class="class-select">
                            <option value="">Choose Your Class</option>
                        </select>
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<section class="testimonial spad">
    <div class="container">
        <div class="testimonial__slider owl-carousel">
            <div class="testimonial__item">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial__text">
                            <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                even more than the first time that I had done in 2014.</p>
                            <img src="front/img/testimonial/xtestimonial-1.png.pagespeed.ic.pJZDs_sXu_.png" alt="">
                            <h5>Linnie Walton <span>- Trainer</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial__item">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial__text">
                            <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                even more than the first time that I had done in 2015.</p>
                            <img src="front/img/testimonial/xtestimonial-1.png.pagespeed.ic.pJZDs_sXu_.png" alt="">
                            <h5>Linnie Walton <span>- Trainer</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial__item">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial__text">
                            <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                even more than the first time that I had done in 2016.</p>
                            <img src="front/img/testimonial/xtestimonial-1.png.pagespeed.ic.pJZDs_sXu_.png" alt="">
                            <h5>Linnie Walton <span>- Trainer</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial__item">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial__text">
                            <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                even more than the first time that I had done in 2017.</p>
                            <img src="front/img/testimonial/xtestimonial-1.png.pagespeed.ic.pJZDs_sXu_.png" alt="">
                            <h5>Linnie Walton <span>- Trainer</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection