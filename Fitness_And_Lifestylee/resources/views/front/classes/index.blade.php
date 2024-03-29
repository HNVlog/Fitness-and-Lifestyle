@extends('front.layout.master')

@section('title','Classes')

@section('body')


    <section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Our Classes</h2>
                        <div class="breadcrumb__widget">
                            <a href="./">Home</a>
                            <span>Our Classes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="classes spad">
        <div class="container">
            <div class="classes__filter">
                <div class="row">
                    <div class="col-lg-12">
                        <form action=" ">
                            <div class="class__filter__select">
                                <p>Filter By Day:</p>
                                <select class="sorting" name="by_day" onchange="this.form.submit();">
                                    <option {{ request('by_day') == 'all' ? 'selected' : '' }} value="all">All</option>
                                    <option {{ request('by_day') == 'Mon, Wed, Fri' ? 'selected' : '' }} value="Mon, Wed, Fri">Mon, Wed, Fri</option>
                                    <option {{ request('by_day') == 'Tue, Thu, Sat' ? 'selected' : '' }} value="Tue, Thu, Sat">Tue, Thu, Sat</option>
                                </select>
                            </div>
                            <div class="class__filter__select">
                                <p>Level:</p>
                                <select class="sorting" name="level" onchange="this.form.submit();">
                                    <option {{ request('level') == 'all' ? 'selected' : '' }} value="all">All Levels</option>
                                    <option {{ request('level') == 'Yoga for beginners' ? 'selected' : '' }} value="Yoga for beginners">yoga for beginners</option>
                                    <option {{ request('level') == 'Yoga for kids' ? 'selected' : '' }} value="Yoga for kids">yoga for kids </option>
                                    <option {{ request('level') == 'Yoga for Seniors' ? 'selected' : '' }} value="Yoga for Seniors">Yoga for Seniors</option>
                                </select>
                            </div>
                            <div class="class__filter__select">
                                <p>Teacher:</p>
                                <select class="sorting" name="teacher" onchange="this.form.submit();">
                                    <option {{ request('teacher') == 'all' ? 'selected' : '' }} value="all">All Teachers</option>
                                    <option {{ request('teacher') == 'Tracy Maclaren' ? 'selected' : '' }} value="Tracy Maclaren">Tracy Maclaren</option>
                                    <option {{ request('teacher') == 'Kerenza Ladonna' ? 'selected' : '' }} value="Kerenza Ladonna">Kerenza Ladonna</option>
                                    <option {{ request('teacher') == 'Silas Dominic' ? 'selected' : '' }} value="Silas Dominic">Silas Dominic</option>
                                    <option {{ request('teacher') == 'Jordan Lawson' ? 'selected' : '' }} value="Jordan Lawson">Jordan Lawson</option>
                                </select>
                            </div>
                            <div class="class__filter__select">
                                <p>Time:</p>
                                <select class="sorting" name="time" onchange="this.form.submit();">
                                    <option {{ request('time') == 'all' ? 'selected' : '' }} value="all">All Time</option>
                                    <option {{ request('time') == '6:30 - 7:30' ? 'selected' : '' }} value="6:30 - 7:30">Time: 6:30 - 7:30</option>
                                    <option {{ request('time') == '17:30 - 18:30' ? 'selected' : '' }} value="17:30 - 18:30">Time: 17:30 - 18:30</option>
                                    <option {{ request('time') == '18:30 - 19:3' ? 'selected' : '' }} value="18:30 - 19:3">Time: 18:30 - 19:30</option>
                                </select>
                            </div>
                            <div class="class__filter__btn">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($classesProducts as $classesProduct)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="classes__item">
                            <div class="classes__item__pic set-bg" data-setbg="front/img/classes/classes-details/{{ $classesProduct->productImages[0]->path }}">
                                <span>{{ date('M d, Y', strtotime($classesProduct->created_at)) }}</span>
                            </div>
                            <div class="classes__item__text">
                                <p>
                                <ul>
                                    <li><span class="icon_calendar"></span>{{ $classesProduct->study_date }}</li>
                                    <li><span class="icon_clock_alt"></span>{{ $classesProduct->study_time }}</li>
                                </ul>
                                </p>
                                <h4><a href="./classes/detail?Product_Id={{$classesProduct->id}}">{{ $classesProduct->name }}</a></h4>
                                <h6>{{ $classesProduct->teacher_name }}<span>- Yoga Teacher</span></h6>
                                <a href="./classes/detail?Product_Id={{$classesProduct->id}}" class="class-btn">JOIN NOW</a>
                            </div>
                        </div>

                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="classes__pagination">

                        @if($page>1)
                            <a style="cursor: pointer" onclick="getPage('{{$page-1}}')"><</a>
                        @endif
                        <a onclick="getPage('{{$page}}')" href="#">{{$page}}</a>
                        @if(($page<4))
                            <a style="cursor: pointer" onclick="getPage('{{$page+1}}')">></a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="upcoming-classes top-classes spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Top Classes</h2>
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
                                <p>{{ $classProduct->study_time }}</p>
                                <h4><a href="./classes/detail?Product_Id={{$classProduct->id}}">{{ $classProduct->name }}</a></h4>
                                <h6>{{ $classProduct->teacher_name }}<span>- Yoga Teacher</span></h6>
                                <a href="./classes/detail?Product_Id={{$classProduct->id}}" class="class-btn">JOIN NOW</a>                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="front/js/blog.js"></script>


@endsection
