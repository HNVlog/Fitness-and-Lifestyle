@extends('front.layout.master')
@section('title','Register')
@section('body')


    <!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option set-bg" data-setbg="front/img/breadcrumb.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__text">
          <h2>Register</h2>
          <div class="breadcrumb__widget">
              <a href="./"  class="{{ (request()->segment(1)=='') ? 'active' : '' }}">Home</a>
            <span>Register</span>
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
      <div class="col-lg-12">
        <div class="register-form">
          <h2>Register</h2>
          <form action="" method="post">
              @csrf

            <div class="group-input">
              <label for="username">Email address *</label>
                <p @error('email') class="error" @enderror>
                    @error('email')
                    <span>{{ $message }}</span>
                    @enderror
                </p>
              <input type="text" id="email" name="email" placeholder="Email...">
            </div>
            <div class="group-input">
              <label for="pass">Password *</label>
                <p @error('password') class="error" @enderror>
                    @error('password')
                    <span>{{ $message }}</span>
                    @enderror
                </p>
              <input type="password" id="pass" name="password" placeholder="Pass...">
            </div>
            <div class="group-input">
              <label for="con-pass">Confirm Password *</label>
                <p @error('confirm_password') class="error" @enderror>
                    @error('confirm_password')
                    <span>{{ $message }}</span>
                    @enderror
                </p>
              <input type="password" id="con-pass" name="confirm_password"placeholder="Con-pass...">
            </div>
            <button type="submit" class="site-btn register-btn">Register</button>
          </form>
          <div class="switch-login">
            <a href="./login" class="or-login">Or Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Register Section End -->

@endsection
