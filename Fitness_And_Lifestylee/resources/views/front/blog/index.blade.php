@extends('front.layout.master')

@section('title','Blog')

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
                            <form action="blog">
                                <input name="search" type="text" placeholder="Search">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__categories">
                            <h4>Categories</h4>
                            <ul>
                                @foreach($blogCategoriess as $blogCategory)
                                <li><a href="blog/{{$blogCategory->name}}">{{$blogCategory->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="blog__sidebar__recent">
                            <h4>Recent News</h4>
                            @foreach( $blogss as $blogg)
                                <div class="blog__recent__item">
                                    <div class="blog__recent__item__pic">
                                        <img src="front/img/blog/{{ $blogg->image }}" width="70px" height="60px" alt="">
                                    </div>
                                    <div class="blog__recent__item__text">
                                        <h6><a href="blog/{{ $blogg->title }}" style="color: #263246">{{ $blogg->title }}</a></h6>
                                        <span>{{date('M d, Y', strtotime($blogg->created_at))}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="blog__sidebar__tags">
                            <h4>Search By Tags</h4>
                            <a href="#">Weight</a>
                            <a href="#">Beauty</a>
                            <a href="#">Yoga Ball</a>
                            <a href="#">Fruit</a>
                            <a href="#">Healthy Food</a>
                            <a href="#">Lifestyle</a>
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
                        @foreach( $blogs as $blog)
                            <div class="col-lg-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="front/img/blog/{{ $blog->image }}" alt="" >
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($blog->created_at)) }}</li>
                                            <li><i class="fa fa-comment-o"></i> {{count($blog->blogComments)}}</li>
                                        </ul>
                                        <h5><a href="blog-details.html">{{ $blog->title }}</a></h5>
                                        <p>{{ $blog->subtitle }}</p>
                                        <a href="blog-details.html" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            {{ $bloggs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
