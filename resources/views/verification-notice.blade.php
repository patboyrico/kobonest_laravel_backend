@extends('layouts.auth-layout')

@section('title', 'Email Verification Notice')

@section('content')

<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background:  linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7) ),url({{ asset('media/bg-2.jpg') }}) no-repeat; background-size: cover;">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="{{ asset('kobonest_logo.png')}}">
                        </a>
                    </div>
                    <div class="container">
                        <div class="portlet mx-auto">
                                <div class="portlet-body" style="color: wheat;
                                font-size: 18px;">
                                    You need to verify your email before you can proceed to use our service. Kindly check your email for your verification email.
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
