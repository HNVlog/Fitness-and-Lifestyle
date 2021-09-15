
@extends('front.layout.master')

@section('title','Class Detail')

@section('body')

    <section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Classes Detail</h2>
                        <div class="breadcrumb__widget">
                            <a href="./">Home</a>
                            <a href="./">Our Classes</a>
                            <span>Classes Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="classes-details spad">

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="classes__sidebar">
                        <div class="classes__sidebar__item classes__sidebar__item--info">
                            <h4>Classes Information</h4>
                            <ul class="classes__sidebar__item__widget">
                                <li><span class="icon_calendar"></span>{{$classDetail->study_date}}</li>
                                <li><span class="icon_clock_alt"></span> {{$classDetail->study_time}}</li>
                            </ul>
                            <ul class="classes__sidebar__item__id">
                                <li><span class="icon_pin_alt"></span> {{$classDetail->address}}</li>
                                <li><span class="icon_id"></span> {{$classDetail->teacher_name}}</li>
                            </ul>
                            <a href="./cart/add/{{$classDetail->id}}" class="sidebar-btn">Add to cart</a>
                        </div>
                        <div class="classes__sidebar__item">
                            <h4>About Instructor</h4>
                            <div class="classes__sidebar__instructor">
                                <div class="classes__sidebar__instructor__pic">
                                    <img src="front/img/{{ $classDetail->avatar }}" alt="">
                                </div>
                                <div class="classes__sidebar__instructor__text">
                                    <div class="classes__sidebar__instructor__title">
                                        <h4>{{$classDetail->teacher_name}}</h4>
                                        <span>Yoga Teacher</span>
                                    </div>
                                    <p>Yoga & Therapy Certificate of<br /> Uttarakhand University Sanskirt</p>
                                    <div class="classes__sidebar__instructor__social">
                                        <a href="#"><span class="social_facebook"></span></a>
                                        <a href="#"><span class="social_twitter"></span></a>
                                        <a href="#"><span class="social_instagram"></span></a>
                                        <a href="#"><span class="social_linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="classes__sidebar__item">
                            <h4>Review & Comment</h4>
                            <div class="classes__sidebar__comment__list">
                                <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="front/img/user/{{ $blogComment->user->avatar ?? 'default-avatar.jpg' }}" alt="">
                                        <div class="classes__sidebar__comment__rating">
                                            @for( $i = 1; $i <= 5; $i++)
                                                @if($i <= $blogComment->rating)
                                                    <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-o"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="classes__sidebar__comment__text">
                                        <span>{{date('M d, Y', strtotime($blogComment->created_at))}}</span>
                                        <h6>{{$blogComment->name}}</h6>
                                        <p>{{$blogComment->messages}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="classes__details">
                        <div class="classes__details__large">

                            <img src="front/img/{{$classesImage->path }}" alt="">
                            <span>Beginer</span>
                        </div>
                        <ul class="classes__details__widget">
                            <li><span class="icon_calendar"></span>{{$classDetail->study_date}}</li>
                            <li><span class="icon_clock_alt"></span> {{$classDetail->study_time}}</li>
                        </ul>
                        <h2>{{$classDetail->name}}</h2>
                        <p>{{$classDetail->content}}</p>
                        <div class="classes__details__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <img src="front/img/{{ $classesImage->path_1 }}" alt="">
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="front/img/{{ $classesImage->path_2 }}" alt="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <img src="front/img/{{ $classesImage->path_3 }}" alt="">
                                        </div>
                                    </div>
                                    <img src="front/img/{{ $classesImage->path_4 }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="classes__details__desc">
                            <h6>The Secret to improving her height to achieve quick result, If you are going to use a
                                passage of you need to be sure.</h6>
                            <ul>
                                <li><span class="icon_check"></span> All their equipment and instruments are alive.</li>
                                <li><span class="icon_check"></span> The that about to watched storm, so beautiful
                                    terrific.</li>
                                <li><span class="icon_check"></span> There are many variations of passages of lorem
                                    ppsum available.</li>
                                <li><span class="icon_check"></span> If you are going to use a passage of you need to be
                                    sure.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="classes__pagination">
                        @if($path>1)
                            <a style="cursor: pointer" onclick="getPath('{{$path-1}}')"><</a>
                        @endif
                        <a onclick="getPath('{{$path}}')" href="#">{{$path}}</a>
                        @if(($path<4))
                            <a style="cursor: pointer" onclick="getPath('{{$path+1}}')">></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        {{--            <div class="col-lg-12">--}}
        {{--                <div class="classes__pagination">--}}

        {{--                </div>--}}
        {{--            </div>--}}

    </section>


    <div class="leave-comment spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leave__comment__text">
                        <h2>Leave A Comment</h2>
                        <form action="" method="post" >
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="email" placeholder="Email*">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <textarea placeholder="Your Comment"></textarea>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="leave__comment__rating">
                                        <div class="personal-rating">
                                            <div class="rate">
                                                <h4 style="float: left ">Your Rating </h4>
                                                <input type="radio" id="star5" name="rating" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rating" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rating" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rating" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rating" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="upcoming-classes spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Feature Course</h2>
                        <p>The trainings are multi-style and you will learn and practice <br />Hatha Vinyasa (flow) and
                            Yin Yoga.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($classProducts as $classProduct)
                    <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="front/img/{{ $classProduct->productImages[0]->path }}">
                                <span>{{ date('M d, Y', strtotime($classProduct->created_at)) }}</span>
                            </div>
                            <div class="classes__item__text">
                                <p>{{ $classProduct->study_time }}</p>
                                <h4><a href="#">{{ $classProduct->name }}</a></h4>
                                <h6>{{ $classProduct->teacher_name }}<span>- Yoga Teacher</span></h6>
                                <a href="./" class="class-btn">JOIN NOW</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="front/js/blog.js"></script>


@endsection
