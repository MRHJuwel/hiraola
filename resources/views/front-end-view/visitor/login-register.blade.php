@extends('front-end-view.master')
@section('title','Login-Register')
@section('content')
    <!-- Begin Hiraola's Login Register Area -->
    <div class="hiraola-login-register_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                    <!-- Login Form s-->
                    <form action="{{route('visitor.login')}}" method="post">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-12 mb--20">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="forgotton-password_info">
                                        <a href="#"> Forgotten pasward?</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="hiraola-login_btn">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
{{--                Login part end --}}
{{--                <===========================/////////////////////////================================>--}}
{{--                Register part start --}}
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <form action="{{route('visitor.register')}}" method="post">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                <div class="col-md-6 col-12 mb--20">
                                    <label>First Name</label>
                                    <input type="text" name="fname" placeholder="First Name">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" placeholder="Last Name">
                                </div>
                                <div class="col-md-12">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-12">
                                    <label>Contact Number*</label>
                                    <input type="text" name="phone" placeholder="Phone number">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password</label>
                                    <input type="password" placeholder="Confirm Password">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="hiraola-register_btn">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Login Register Area  End Here -->
@endsection
