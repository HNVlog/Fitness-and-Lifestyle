@extends('front.layout.master')

@section('title','Blog Detail')

@section('body')


    <section class="breadcrumb-option blog-hero set-bg" data-setbg="front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__hero__text">

                        <h2>{{ $blog->title }}</h2>
                        <ul>
{{--                            @foreach( $blogComments as $blogComment)--}}
{{--                            @endforeach--}}
                            <li>By <span>{{ $blogComment->name }}</span></li>
                            <li>{{ date('M d, Y',strtotime($blogComment->created_at)) }}</li>
{{--                                @foreach( $blogs as $blogss)--}}
{{--                                @endforeach--}}
                            <li>{{ count($blog->blogComments) }}Comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__categories">
                            <h4>Categories</h4>
                            <ul>
                                <li onclick="getCategory('All')"><a href="./blog" style="cursor: pointer" >All</a></li>
                                @foreach($blogCategories as $category)
                                    <li onclick="getCategory('{{$category->name}}')"><a style="cursor: pointer">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog__sidebar__recent">
                            <h4>Recent News</h4>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="front/img/blog/br-1.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>09 Kinds Of Vegetables Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="front/img/blog/br-2.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>Tips You To Balance Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="front/img/blog/br-3.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>4 Principles Help You Lose Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog__sidebar__tags">
                            <h4>Search By Tags</h4>
                            @foreach($blogCategories as $category)
                                <a onclick="getCategory('{{$category->tags}}')" style="cursor: pointer">{{$category->tags}}></a>
                            @endforeach
                        </div>
                        <div class="blog__sidebar__comment">
                            <h4>Comment & Rating</h4>
{{--                            @foreach( $blogComment as $blogComment)--}}
                                <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="front/img/user/{{ $blogComment->user->avatar }}" alt="">
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
{{--                            @endforeach--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__large">

                            <img src="front/img/blog/{{$blog->image}}" alt="">
                            <span>Fuel</span>
                        </div>
                        <div class="blog__details__text">
{{--                            @foreach( $blog as $blogContent)--}}
{{--                            @endforeach--}}
                            <p> {{ $blog->content }}</p>
                        </div>
                        <div class="blog__details__quote">
                            <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                even more</p>
                        </div>
                        <div class="blog__details__pic">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="front/img/blog/details/xbd-1.jpg.pagespeed.ic.EFgiO1yStj.jpg" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="front/img/blog/details/xbd-2.jpg.pagespeed.ic.x3T5IqYSmY.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__desc">
                            <h4>The Secret to improving</h4>
                            <p>{{ $blog->content }}</p>
                            <p>{{ $blog->content_2 }}</p>
                        </div>
                        <div class="blog__details__tags__share">
                            <p><span>Tags:</span> All, Trending, Fuel, Cardio, Life Style</p>
                            <div class="blog__details__share">
                                <a href="#"><span class="social_facebook"></span></a>
                                <a href="#"><span class="social_instagram"></span></a>
                                <a href="#"><span class="social_twitter"></span></a>
                                <a href="#"><span class="social_linkedin"></span></a>
                            </div>
                        </div>
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                                <img src="front/img/blog/details/xblog-posted.png.pagespeed.ic.M-64xM1p7n.png" alt="">
                            </div>
                            <div class="blog__details__author__text">
                                <h4>Grace Carter</h4>
                                <p>The face of the moon was in shadow.The spectacle before us was indeed sublime. All
                                    the their that dummy equipment and instruments are alive.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="blog__previous__btn">
                                    <i class="fa fa-angle-left"></i>
                                    <h6>6 Reasons to get rebounding</h6>
                                    <span>Previous Post</span>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="blog__next__btn">
                                    <i class="fa fa-angle-right"></i>
                                    <h6>Tips make cooking simple</h6>
                                    <span>Previous Post</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="leave-comment spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leave__comment__text">
                        <h2>Leave A Comment</h2>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="email" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div class="leave__comment__rating">
                                        <div class="rate">
                                            <h4 style="float: left" >Your Rating: </h4>
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
                                <div class="col-lg-12 text-center">
                                    <textarea placeholder="Your Comment"></textarea>
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="front/js/blog.js"></script>

@endsection
