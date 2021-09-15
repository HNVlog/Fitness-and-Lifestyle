@extends('front.layout.master')

@section('title','Home')

@section('body')


<section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Blog</h2>
                    <div class="breadcrumb__widget">
                        <a href="./">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-lg-1 order-2">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form>
                            <input type="text" placeholder="Search" name="category">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__categories">
                        <h4>Categories</h4>
                        <ul>
                            <li onclick="getCategory('All')"><a style="cursor: pointer">All</a></li>
                            @foreach($blogCategories as $category)
                                <li onclick="getCategory('{{$category->name}}')"><a style="cursor: pointer">{{$category->name}}</a></li>
{{--                            <li onclick="getCategory('Fuel')"><a href="#">Fuel (20)</a></li>--}}
{{--                            <li onclick="getCategory('Sweat')"><a href="#">Sweat (5)</a></li>--}}
{{--                            <li onclick="getCategory('Play')"><a href="#">Play (9)</a></li>--}}
{{--                            <li onclick="getCategory('Live')"><a href="#">Live (10)</a></li>--}}
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
{{--                        <a href="#">Weight</a>--}}
{{--                        <a href="#">Beauty</a>--}}
{{--                        <a href="#">Yoga Ball</a>--}}
{{--                        <a href="#">Fruit</a>--}}
{{--                        <a href="#">Healthy Food</a>--}}
                        @endforeach
                    </div>
                    <div class="blog__sidebar__comment">
                        <h4>Comment & Rating</h4>
                        @foreach( $blogComments as $blogComment)
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
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-lg-2 order-1">
                <div class="row">
                    @foreach($blogs as $blog)

                    <div class="col-lg-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="front/img/blog/{{ $blog->image }}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i>
                                        {{ date('M d, Y',strtotime($blog->created_at)) }}
                                    </li>
                                    <li><i class="fa fa-comment-o"></i>

                                    </li>
                                </ul>
                                <h5><a href="blog-details.html">{{ $blog->title }}</a></h5>
                                <p>{{ $blog->subtitle }} </p>
                                <a href="./blog/detail?Product_Id={{$blog->blog_category_id}}" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 text-center">
                        <div class="classes__pagination blog__pagination">
                           @if($page>1)
                            <a style="cursor: pointer" onclick="getPage('{{$page-1}}')"><</a>
                            @endif
                            <a onclick="getPage('{{$page}}')" href="#">{{$page}}</a>
                               @if(($page<3))
                            <a style="cursor: pointer" onclick="getPage('{{$page+1}}')">></a>
                               @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="front/js/blog.js"></script>

@endsection
