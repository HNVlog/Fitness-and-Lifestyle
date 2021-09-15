@extends('front.layout.master')
@section('title','Login')
@section('body')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Login</h2>
                    <div class="breadcrumb__widget">
                        <a href="./"  class="{{ (request()->segment(1)=='') ? 'active' : '' }}">Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="front/img/logo.jpg" alt="">
            </div>
            <div class="col-lg-8 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="" method="post">
                        @csrf
                        @if (session('status'))
                            <div class="error">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="group-input">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email*</label>
                                <p @error('email') class="error" @enderror>
                                    @error('email')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </p>
                            <input type="email" id="email" name="email" placeholder="Your email...">
                            </div>
                            <div class="group-input">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="pass">Password *</label>
                                    <p @error('password') class="error" @enderror>
                                        @error('password')
                                        <span>{{ $message }}</span>
                                        @enderror
                                    </p>
                                <input type="password" id="pass" name="password" placeholder="Your password...">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        <input type="checkbox" id="save-pass" name="remember" {{ old('remember') ? 'checked' : ''}}> Save Password
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">Sign In</button>
                            </div>
                        </div>
                    </form>

                    <div class="switch-login">
                        <a href="./register" class="or-login {{ (request()->segment(1)=='') ? 'active' : '' }}">Or Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Section End -->


@endsection
