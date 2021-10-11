
@extends('front.layout.master')

@section('title','Pricing')

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
                                <img src="front/img/classes/classes-details/{{ $classProduct->productImages[0]->path }}" width="370" height="241" alt="">
                            </div>
                            <ul>
                                <li><h2>${{ $classProduct->price }}</h2></li>
                                {{--noidung--}}
                                <li>{{ $classProduct->content }}</li>
                                <li>{{ $classProduct->study_date }} </li>
                                <li>{{ $classProduct->teacher }}</li>
                                <li> {{ $classProduct->study_time }}</li>
                            </ul>

                            @auth()
                                <a href="./cart/add/{{$classProduct->id}}" onclick="alert('Add success !')" class="primary-btn">BUY NOW</a>
                            @else
                                <a href="./login" class="primary-btn">BUY NOW</a>
                            @endauth
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
                <form action="" method="post" class="appointment__form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div @error('name') class="error error-home" @enderror>
                                @error('name')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="text" placeholder="Name" name="name">
                        </div>
                        <div class="col-lg-6">
                            <div @error('email') class="error error-home" @enderror>
                                @error('email')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="col-lg-6">
                            <div @error('phone') class="error error-home" @enderror>
                                @error('phone')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="col-lg-6">
                            <div @error('classes') class="error error-home" @enderror>
                                @error('classes')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <select class="class-select" name="classes" required>
                                <option disabled>Choose Your Class</option>
                                <option value="Yoga for beginners">Yoga for beginners</option>
                                <option value="Yoga for kids">Yoga for kids</option>
                                <option value="Yoga for Seniors">Yoga for Seniors</option>
                            </select>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div @error('message') class="error error-home" @enderror>
                                @error('message')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <textarea placeholder="Message" name="message"></textarea>
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
