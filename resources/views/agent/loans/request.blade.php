@extends('layouts.dashboard-layout')

@section('title', 'Agent Request Loan')

@section('sidebar')
    @include('agent.includes.sidebar')
@endsection

@section('fund-wallet')
<a href="{{ route('agent.wallet.fund') }}" class="btn btn-default" aria-haspopup="true" aria-expanded="true">
    Fund Wallet
</a>
@endsection

@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    Kobonest </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    {{-- <span class="kt-subheader__breadcrumbs-separator"></span> --}}
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        @yield('title') </a>

                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                    <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                        <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">{{ Carbon::today()->toDateString() }}</span>

                        <!--<i class="flaticon2-calendar-1"></i>-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--sm">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                            </g>
                        </svg> </a>
                    <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
                        <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                </g>
                            </svg>

                            <!--<i class="flaticon2-plus"></i>-->
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                            <!--begin::Nav-->
                                @include('agent.includes.quick-actions')

                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Request Loan Pending Approval
                            </h3>
                        </div>
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

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right" method="POST" action="{{route('agent.post.loan.request')}}">

                        @csrf

                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Amount:</label>
                                    <input type="number" name="amount" class="form-control" placeholder="Enter Amount">
                                    <span class="form-text text-muted">Please enter the amount you wish to borrow</span>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">Loan Category:</label>
                                    <select class="form-control" name="loan_category">
                                            <option value=""> -- Select -- </option>
                                        @foreach ($categories as $item)
                                        <option value="{{$item->id}}"> {{ $item->name }} </option>
                                        @endforeach
                                    </select>
                                    <span class="form-text text-muted">What do you need a loan for?</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Marital Status</label>
                                    <select class="form-control" name="marital_status">
                                        <option value=""> -- Select -- </option>
                                        <option value="single"> Single </option>
                                        <option value="married"> Married </option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label>Type Of House</label>
                                    <select class="form-control" name="house_type">
                                        <option value=""> -- Select -- </option>
                                        <option value="rented"> Rented </option>
                                        <option value="family"> Family House </option>
                                        <option value="own"> Own House </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Street Address</label>
                                    <input class="form-control" name="street_address" placeholder="Enter Street Address" />
                                    <span class="form-text text-muted">Enter Your Street Address</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>City</label>
                                    <input class="form-control" name="city" placeholder="Enter City" />
                                    <span class="form-text text-muted">Enter Your City Name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>State</label>
                                    <select class="form-control" name="state">
                                            <option value=""> -- Select -- </option>
                                        @foreach ($states as $item)
                                            <option value="{{ $item->name }}"> {{ $item->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label>Phone Number</label>
                                    <input class="form-control" name="phone_number" placeholder="Enter Phone Number" />
                                    <span class="form-text text-muted">Enter Your Phone Number</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Enter BVN</label>
                                <input class="form-control" name="bvn" placeholder="Enter BVN" />
                                <span class="form-text text-muted">Your BVN will be verified</span>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>

                <!--end::Portlet-->

            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>

@endsection
