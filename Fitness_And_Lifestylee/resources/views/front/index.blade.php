@extends('front.layout.master')

@section('title','Home')

@section('body')



    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="front/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>Welcome to Zogin</span>
                                <h2>What hurts today makes you stronger tomorrow</h2>
                                <a href="#" class="primary-btn">DISCOVER MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="front/img/slide2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>Welcome to Zogin</span>
                                <h2>Your journey to change yourself start here</h2>
                                <a href="#" class="primary-btn">DISCOVER MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home__about__pic">
                        <div class="home__about__pic__item large-item set-bg" data-setbg="front/img/about/about-1.jpg"></div>
                        <div class="home__about__pic__item">
                            <div class="home__about__pic__item__inner set-bg" data-setbg="front/img/about/about-2.jpg"></div>
                            <div class="home__about__pic__item__inner set-bg" data-setbg="front/img/about/about-3.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home__about__text">
                        <div class="section-title">
                            <img src="front/img/xicon.png.pagespeed.ic.3_OZCSmeHf.png" alt="">
                            <h2>Welcome to Zogin</h2>
                        </div>
                        <span>“What hurts today makes you stronger tomorrow.”</span>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                        <p class="para-2">Zogin is a great place for those who are in search of the ancient practice and
                            true essence of yoga, meditation, health, peace and learning the art of creating a class to
                            teach safely. We are passionate about adjustments and mainly focus on the alignment of the
                            asanas.</p>
                        <a href="/about" class="primary-btn">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="front/img/xicon.png.pagespeed.ic.3_OZCSmeHf.png" alt="">
                        <h2>Enjoy All Aspects Of Yoga</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="services__list">
                <div class="row">
                    @foreach( $ProductCategories as $ProductCategory)
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="services__item">
                                <img src="front/img/{{$ProductCategory->avatar}}" alt="">
                                <h5>{{ $ProductCategory->name }}</h5>
                                {{--                        <p> Asana is “a steady, comfortable seat,” particularly for the purpose of meditation.--}}
                                {{--                        </p>--}}
                                <p>{{ $ProductCategory->title }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="chooseus__text">
                        <h2>Why Choose Us</h2>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="front/img/chooseus/choose-1.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">2146</h2>
                            <p>Students</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="front/img/chooseus/choose-2.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">15</h2>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="front/img/chooseus/choose-3.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">48</h2>
                            <p>Branches</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="front/img/chooseus/choose-4.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">234</h2>
                            <p>Expert Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chooseus__pic">
                        <img src="front/img/chooseus/choose-pic.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="upcoming-classes spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Upcoming Courses</h2>
                        <p>The trainings are multi-style and you will learn and practice Hatha Vinyasa (flow)<br /> and
                            Yin Yoga.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($classProducts as $classProduct)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="front/img/classes/classes-details/{{ $classProduct->productImages[0]->path }}">
                                <span>{{ date('M d, Y', strtotime($classProduct->created_at)) }}</span>
                            </div>
                            <div class="classes__item__text">
                                <p>
                                <ul>
                                    <li><span class="icon_calendar"></span>{{ $classProduct->study_date }}</li>
                                    <li><span class="icon_clock_alt"></span>{{ $classProduct->study_time }}</li>
                                </ul>
                                </p>
                                <h4><a href="#">{{ $classProduct->name }}</a></h4>
                                <h6>{{ $classProduct->teacher_name }}<span>- Yoga Teacher</span></h6>
                                <a href="./classes/detail?Product_Id={{$classProduct->id}}" class="class-btn">JOIN NOW</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Our Gallery</h2>
                        <p>This is the beautiful yogi and yoginis that have shared their journey and growth with<br />
                            us. Take a look!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach( $productCategoryImg as $ProductCategory)
                    <div class="col-lg-3 col-md-4 col-6 p-0">
                        <div class="gallery__pic">
                            <img src="front/img/{{ $ProductCategory->img }}" alt="">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="instructor spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Meet Our Instructors</h2>
                        <p>Our Indian and western teachers are highly qualified and will be happy to share this<br />
                            spiritual journey with you.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($classDetails as $classDetail)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="instructor__item">
                            <div class="instructor__item__pic">
                                <img src="front/img/{{$classDetail->avatar}}" alt="">
                            </div>
                            <div class="instructor__item__text">
                                <h5>{{$classDetail->teacher_name}}</h5>
                                <span>Yoga Trainer</span>
                            </div>
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
