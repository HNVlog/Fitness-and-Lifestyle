@extends('front.layout.master')

@section('title','My Account')

@section('body')


    <section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__widget">
                            <a href="./">Home</a>
                            <span>Account-Information</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section spad">
        <section class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            @if(session()->has('success'))
                                <span class="alert alert-success">
                                <strong>{{ session()->get('success') }}</strong>
                            </span>
                            @endif
                            <h4>Account Information</h4>
                            <form action="#" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="email" placeholder="Your email">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Account Name">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="tel" placeholder="Your phone">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Address">
                                    </div>
                                    <div class="col-lg-12">
                                        {{--                                    <textarea placeholder="Description"></textarea>--}}
                                        <button type="submit" class="site-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Change Password</h4>
                            <form action="#" method="post" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p @error('current_password') class="error" @enderror>
                                            @error('current_password')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <input type="email" placeholder="Old Password" name="current_password">
                                    </div>
                                    <div class="col-lg-12">
                                        <p @error('password') class="error" @enderror>
                                            @error('password')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <input type="password" placeholder="A New Password" name="password">
                                    </div>
                                    <div class="col-lg-12">
                                        <p @error('password_confirmation') class="error" @enderror>
                                            @error('password_confirmation')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <input type="password" placeholder="Confirm Password" name="password_confirmation">
                                        <button type="submit" class="site-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection
