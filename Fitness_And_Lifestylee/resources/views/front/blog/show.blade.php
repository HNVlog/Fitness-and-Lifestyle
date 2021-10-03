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
                            {{--                            @foreach( $blogComment as $blogCommentt)--}}
                            {{--                            @endforeach--}}
                            <li>By <span>{{ $blog->category }}</span></li>
                            <li><span>  {{ date('M d, Y',strtotime($blog->created_at)) }}</span>
                            </li>
                            {{--                            <li>{{ date('M d, Y',strtotime($blogComment->created_at)) }}</li>--}}
                            {{--                                @foreach( $blogs as $blogss)--}}
                            {{--                                @endforeach--}}
                            {{--                            <li>{{ count($blog->blogComments) }}  Comments</li>--}}
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
                            <h4>Top Classes</h4>
                            @foreach($classProducts  as $classProducts )
                                <div class="blog__recent__item">
                                    <div class="blog__recent__item__pic" data-setbg="front/img/{{ $classProducts->productImages[0]->path }}">
                                        <img src="front/img/{{ $classProducts->productImages[0]->path }}" alt=""  style="width: 70px;height: 70px; background-image: url('/front/img/{{ $classProducts->productImages[0]->path }}');" >
                                    </div>
                                    <div class="blog__recent__item__text">
                                        <h6><a href="./classes/detail?Product_Id={{$classProducts->id}}">{{ $classProducts->name }}</a></h6>
                                        <h6>Teacher: {{ $classProducts->teacher_name }}</h6>
                                        <span>  {{ date('M d, Y',strtotime($classProducts->created_at)) }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="blog__sidebar__tags">
                            <h4>Search By Tags</h4>
                            @foreach($blogCategories as $category)
                                <a onclick="getCategory('{{$category->tags}}')" style="cursor: pointer">{{$category->tags}}</a>
                            @endforeach
                        </div>
                        <div class="blog__sidebar__comment">
                            <h4>Comment & Rating</h4>
                            @foreach($blogComments as $blogComment)
                                <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="front/img/user/{{ $blogComment->user->avatar ?? 'default-avatar.jpg'}}" alt="">
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
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__large">

                            <img src="front/img/blog/{{$blog->image}}" alt="">
                            <span>{{ $blog->category }}</span>
                        </div>
                        <div class="blog__details__text">
                            {{--                            @foreach( $blog as $blogContent)--}}
                            {{--                            @endforeach--}}
                            <p> {{ $blog->content }}</p>
                        </div>
                        <div class="blog__details__quote">
                            <p>{{ $blog->content_1 }}</p>
                        </div>
                        <div class="blog__details__pic">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="front/img/blog/{{$blog->image_1}}" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="front/img/blog/{{$blog->image_2}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__desc">
                            <h4>The Secret to improving</h4>
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
                        <form method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input name="name" type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input name="email" type="email" placeholder="Email*">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <textarea name="messages" placeholder="Your Comment"></textarea>
                                </div>
                                <input name="blog_id" value="1" hidden>
                                <input name="user_id" value="1" hidden>
                                <input name="product_id" value="{{$blogComment->product_id}}" hidden>
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

    <script src="front/js/blog.js"></script>

@endsection
