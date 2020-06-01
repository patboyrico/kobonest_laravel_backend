@extends('layouts.auth-layout')

@section('title', 'Register As An Agent')

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
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title" style="color: white;">Sign Up For An Agent Account</h3>
                        </div>
                        @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> ×</span></button>
                                    {{-- <strong>Snap! </strong>You should check in on some of those fields below. --}}
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                </div>
                        @endif
                        <form class="kt-form" action="{{ route('agent.post.register') }}" method="POST">
                            @csrf
                            <div class="">
                                <input class="form-control" type="text" placeholder="Enter First Name" name="first_name" required>
                                @if ($errors->first('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <span class="form-text text-muted">{{ $errors->first('first_name') }}</span>
                                    </span>
                                @endif
                            </div>
                            <div class="">
                                <input class="form-control" type="text" placeholder="Enter Last Name" name="last_name" required>
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <span class="form-text text-muted">{{ $errors->first('last_name') }}</span>
                                    </span>
                                @endif
                            </div>
                            <div class="">
                                <input class="form-control" type="text" placeholder="Enter Phone Number" name="phone_number" autocomplete="off" required>
                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <span class="form-text text-muted">{{ $errors->first('phone_number') }}</span>
                                    </span>
                                @endif
                            </div>
                            <div class="">
                                <input class="form-control" type="text" placeholder="Enter Email Address" name="email" autocomplete="off" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <span class="form-text text-muted">{{ $errors->first('email') }}</span>
                                    </span>
                                @endif
                            </div>
                            <div class="">
                                <input class="form-control" type="password" placeholder="Enter Password" name="password" required minlength="8">
                                    <span class="invalid-feedback" role="alert">
                                        <span class="form-text text-muted">{{ $errors->first('password') }}</span>
                                    </span>
                            </div>
                            <div class="">
                                <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col kt-align-left">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="agree" required>I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                                        <span></span>
                                    </label>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button class="btn btn-brand btn-pill kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                                <button id="kt_login_signup_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__account">
                        <span class="kt-login__account-msg">
                            Already have an account?
                        </span>
                        &nbsp;&nbsp;
                        <a href="{{ route('agent.login') }}"  class="kt-login__account-link">Sign In!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
