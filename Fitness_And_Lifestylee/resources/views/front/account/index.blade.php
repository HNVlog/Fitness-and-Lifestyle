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
                            <a href="../your_course">Home</a>
                            <span>Account-Information</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section spad">
        <section class="container">
            @if(session()->has('success'))
                <span class="alert alert-success">
                    <strong>{{ session()->get('success') }}</strong>
                </span>
            @endif
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Account Information</h4>
                            <form action="{{url('/update1')}}" method="post" class="comment-form">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="avatar">Avatar: <br>
                                            <img src="/front/img/user/{{ \Illuminate\Support\Facades\Auth::user()->avatar }}" alt="" style=" width: 100px;height: 100px;background-image: url('/front/img/user/{{ \Illuminate\Support\Facades\Auth::user()->avatar }}')">
                                        </label>
                                        <input type="file" value="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}" id="avatar" name="avatar" style="border: #ffffff; cursor: pointer">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}" id="id" name="id" hidden>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="name">Name:</label>
                                        <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" id="name" name="name">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="email">Email:</label>
                                        <input type="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" id="email" name="email">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="phone">Phone:</label>
                                        <input type="tel" value="{{ \Illuminate\Support\Facades\Auth::user()->phone }}" id="phone" name="phone">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="address">Address:</label>
                                        <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()-> address}}" id="address" name="address">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" value="{{ \Illuminate\Support\Facades\Auth::user()->passworsd }}" id="password" name="password" hidden>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->level }}" id="level" name="level" hidden>
                                    </div>
                                    <div class="col-lg-12">
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
                            <form action="{{url('/update2')}}" method="post" class="comment-form">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="email">Old Password:</label>
                                        <p @error('current_password') class="feedback" @enderror>
                                            @error('current_password')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <input type="password" placeholder="Old Password" name="current_password" value="{{ \Illuminate\Support\Facades\Auth::user()->passworsd }}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="email">New Password:</label>
                                        <p @error('password') class="error" @enderror>
                                            @error('password')
                                            <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <input type="password" placeholder="A New Password" name="password">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="email">Confirm Password:</label>
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
