

@extends('front.layout.master')

@section('title','Contact')

@section('body')

<section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Contact Us</h2>
                    <div class="breadcrumb__widget">
                        <a href="index.html">Home</a>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <span class="icon_phone"></span>
                    <h4>Phone</h4>
                    <p>+012.345.6789</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <span class="icon_pin_alt"></span>
                    <h4>Address</h4>
                    <p>8 Ton That Thuyet, My Dinh, Cau Giay, Hanoi, Vietnam</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <span class="icon_clock_alt"></span>
                    <h4></h4>
                    <p>+01-3-8888-6868</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <span class="icon_mail_alt"></span>
                    <h4>Email</h4>
                    <p>hnvlog@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096966609172!2d105.78049781476334!3d21.028805785998404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4cd0c66f05%3A0xea31563511af2e54!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1629964438228!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h5>Ha Noi</h5>
            <ul>
                <li>Phone: +012.345.6789</li>
                <li>Add: 8 Ton That Thuyet, My Dinh, Cau Giay, Hanoi, Vietnam</li>
            </ul>
        </div>
    </div>
</div>


<div class="leave-comment comment-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="leave__comment__text">
                    <h2>Leave A Comment</h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Name*">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Email*">
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


@endsection
