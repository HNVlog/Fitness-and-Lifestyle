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
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog__sidebar__recent">
                            <h4>Recent News</h4>
                            @foreach($blogss as $blog)
                                <div class="blog__recent__item">
                                    <div class="blog__recent__item__pic">
                                        <img src="front/img/blog/{{ $blog->image }}" alt="" style="width: 70px;height: 70px">
                                    </div>
                                    <div class="blog__recent__item__text">
                                        <h6><a href="./blog/detail?Product_Id={{$blog->blog_category_id}}">{{ $blog->title }}</a></h6>
                                        <span>  {{ date('M d, Y',strtotime($blog->created_at)) }}</span>
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
                                        <img src="front/img/blog/{{ $blog->image }}" alt="" style="width: 170px;height: 370px">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i>
                                                {{ date('M d, Y',strtotime($blog->created_at)) }}
                                            </li>
                                            <li><i class="fa fa-comment-o"></i>

                                            </li>
                                        </ul>
                                        <h5><a href="./blog/detail?Product_Id={{$blog->id}}">{{ $blog->title }}</a></h5>
                                        <p>{{ $blog->subtitle }} </p>
                                        <a href="./blog/detail?Product_Id={{$blog->id}}" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="classes__pagination blog__pagination text-center">
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
    </section>

    <script src="front/js/blog.js"></script>

@endsection
