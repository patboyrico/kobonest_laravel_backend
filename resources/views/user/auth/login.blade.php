@extends('layouts.auth-layout')

@section('title', 'Login')

@section('content')

<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(media/bg/bg-2.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="{{ asset('kobonest_logo.png')}}">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign In To Your Account</h3>
                        </div>
                        @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> ×</span></button>
                                    {{-- <strong>Snap! </strong>You should check in on some of those fields below. --}}
                                        @foreach ($errors->all() as $error)
                                                {{ $error }}
                                        @endforeach
                                </div>
                        @endif
                        <form class="kt-form" action="{{ route('user.post.login') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter Email Address" name="email" autocomplete="off">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" placeholder="Enter Password" name="password">
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="remember"> Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__account">
                        <span class="kt-login__account-msg">
                            Don't have an account yet ?
                        </span>
                        &nbsp;&nbsp;
                        <a href="{{ route('user.register') }}"  class="kt-login__account-link">Sign Up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
