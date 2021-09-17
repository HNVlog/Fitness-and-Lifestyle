<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">

    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zogin | @yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="front/css/bootstrap.min.css%2bfont-awesome.min.css%2belegant-icons.css%2bnice-select.css%2bbarfiller.css%2bowl.carousel.min.css%2bslicknav.min.css%2bstyle.css.pagespeed.cc.pxOhNsQAeq.css" type="text/css" />
    <link rel="stylesheet" href="front/css/style.css" type="text/css">

</head>
<body>

<div id="preloder">
    <div class="loader"></div>
</div>

<div class="offcanvas-menu-overlay"></div>

<div class="offcanvas-menu">
    <div class="offcanvas__logo">
        <a href="./" class="{{ (request()->segment(1)=='') ? 'active' : '' }}"><img src="front/img/xlogo.png.pagespeed.ic.02A2DF3goq.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__widget" data-toggle="dropdown" id="signIn" data-original-title="" title="">
        <ul>
            <li>CALL US: + 012.345.6789</li>
            <li>WRITE US: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="531c15151a101613160b121e031f167d101c1e">hnvlog@gmail.com&#160;</a></li>
            <li>OPENING TIMES: MON - SAT: 9:00 - 19:00</li>
        </ul>
        <a href="" class="primary-btn">JOIN US</a>
    </div>
    <nav class="header__menu">
        <ul class="mobile-menu">
            <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="./">Home</a></li>
            <li class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}"><a href="./about">About</a></li>
            <li class="{{ (request()->segment(1) == 'classes') ? 'active' : '' }}"><a href="./classes">Classes</a></li>
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li class="{{ (request()->segment(1) == 'pricing') ? 'active' : '' }}"><a href="./pages">Pricing</a></li>
                    <li class="{{ (request()->segment(1) == 'faq') ? 'active' : '' }}"><a href="./faq">Faq</a></li>
                </ul>
            </li>
            <li class="{{ (request()->segment(1) == 'blog') ? 'active' : '' }}"><a href="./blog">Blog</a></li>
            <li class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }}"><a href="./contact">Contact</a></li>
        </ul>
    </nav>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
</div>

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./"  class="{{ (request()->segment(1)=='') ? 'active' : '' }}"><img src="front/img/xlogo.png.pagespeed.ic.02A2DF3goq.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__top__widget">
                        <ul>
                            <li>CALL US: + 012-345-6789</li>
                            <li>WRITE US: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87c8c1c1cec4c2c7c2dfc6cad7cbc2a9c4c8ca">hnvlog@gmail.com&#160;</a></li>
                            <li>OPENING TIMES: MON - SAT: 9:00 - 19:00</li>
                        </ul>

                        <div class=" clearfix navbar primary-btn" id="fix_header">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <div class="navbar-ava dropdown-toggle" data-toggle="dropdown" id="signIn" data-original-title="" title="">
                                        <span class="ava-img">
                                            <img alt="ava" class="img-responsive" src="https://static.edumall.vn/assets/edumall_v3/ava-4b17eb34b3f38c9f67ff2c647c2f9f8010cff8dbadbbd06c5e48fe1ce6b64291.svg">
                                        </span>
                                        <div class="ava-info hidden-md hidden-sm hidden-xs">
                                            <p>Hello</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu drop-menu-login">
                                        <div class="popover-signin">
                                            <a href="./login" class="btn btn-block btn-white">Account-Information</a>
                                            <a href="./your_course" class="btn btn-block btn-white">Your-Course</a>
                                            <a href="./cart" class="btn btn-block btn-white">Shopping-Cart</a>
                                            <a href="./logout" class="btn btn-block btn-white">Log-Out</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div>
    <div class="header__nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="./">Home</a></li>
                            <li class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}"><a href="./about">About</a></li>
                            <li class="{{ (request()->segment(1) == 'classes') ? 'active' : '' }}"><a href="./classes">Classes</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li class="{{ (request()->segment(1) == 'pricing') ? 'active' : '' }}"><a href="./pricing">Pricing</a></li>
                                    <li class="{{ (request()->segment(1) == 'faq') ? 'active' : '' }}"><a href="./faq">Faq</a></li>
                                </ul>
                            </li>
                            <li class="{{ (request()->segment(1) == 'blog') ? 'active' : '' }}"><a href="./blog">Blog</a></li>
                            <li class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }}"><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



@yield('body')


<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <img src="front/img/xfooter-logo.png.pagespeed.ic.UwTIYkOmeD.png" alt="">
                    <ul>
                        <li><i class="fa fa-clock-o"></i> Mon - Fri: 7:30am - 05:30pm</li>
                        <li><i class="fa fa-clock-o"></i> Sat - Sun: 8:30am - 07:45pm</li>
                    </ul>
                    <form action="#" method="post" class="subscribe-form">
                        @csrf
                        <input type="email" placeholder="Your Email" name="email">
                        <button type="submit"><i class="fa fa-send"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>Inspiration</h5>
                    <ul>
                        <li><a href="#">Yoga for Beginners</a></li>
                        <li><a href="#">Yoga for men</a></li>
                        <li><a href="#">Advanced Yoga</a></li>
                        <li><a href="#">Online Yoga</a></li>
                        <li><a href="#">Conditioning</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>About Us</h5>
                    <ul>
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">Our Mission</a></li>
                        <li><a href="#">Meet The Team</a></li>
                        <li><a href="#">Introduce</a></li>
                        <li><a href="#">Customer Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h5>Contact Us</h5>
                    <ul class="footer-address">
                        <li><i class="fa fa-phone"></i> (012) 345 6789</li>
                        <li><i class="fa fa-envelope"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6aea3aaaaa986bca9a1afa8e8a5a9ab">hnvlog@gmail.com&#160;</a></li>
                        <li><i class="fa fa-location-arrow"></i> 8 Ton That Thuyet, My Dinh, Cau Giay, Hanoi</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="footer__copyright__text">
                        <p>Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This websize is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">HNVlog</a></p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__copyright__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="front/js/jquery-3.3.1.min.js"></script>
<script src="front/js/bootstrap.min.js%2bjquery.nice-select.min.js%2bjquery.barfiller.js%2bjquery.slicknav.js.pagespeed.jc.TI2FwaBMAf.js"></script><script>eval(mod_pagespeed_KLSdHHJRkq);</script>
<script>eval(mod_pagespeed_u7c5sEkfau);</script>
<script>eval(mod_pagespeed_YlzCvQeR5G);</script>
<script>eval(mod_pagespeed_ZINUlBTRhK);</script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/main.js"></script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"68352fe7882e23c8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/zogin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Aug 2021 14:56:50 GMT -->
</html>

