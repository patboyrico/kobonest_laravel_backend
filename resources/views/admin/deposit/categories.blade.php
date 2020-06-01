@extends('layouts.dashboard-layout')

@section('title', 'Investment Categories')

@section('sidebar')
    @include('admin.includes.sidebar')
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
                            @include('admin.includes.quick-actions')

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
        {{-- <div class="alert alert-light alert-elevate" role="alert">
            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
            <div class="alert-text">
                The Metronic Datatable component supports local or remote data source. For the local data you can pass javascript array as data source. In this example the grid fetches its
                data from a javascript array data source. It also defines
                the schema model of the data source. In addition to the visualization, the Datatable provides built-in support for operations over data such as sorting, filtering and
                paging performed in user browser(frontend).
            </div>
        </div> --}}
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       Categories
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <a href="{{ route('admin.deposit.category.add') }}" class="btn btn-brand btn-icon-sm" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon2-plus"></i> Add New
                        </a>

                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Search Form -->
                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="row align-items-center">
                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                    <div class="kt-input-icon kt-input-icon--left">
                                        <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                            <span><i class="la la-search"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Search Form -->
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit">

                <!--begin: Datatable -->
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data" style="">
                    <table class="kt-datatable__table" style="display: block;">
                        <thead class="kt-datatable__head"><tr class="kt-datatable__row" style="left: 0px;">
                            <th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span style="width: 110px;">Name</span>
                            </th>
                            <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span style="width: 110px;">Time Of Maturity</span>
                            </th>
                            <th data-field="CompanyName" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span style="width: 110px;">Interest Rate</span>
                            </th>
                            <th data-field="CompanyName" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span style="width: 110px;">Minimum Withdrawal Time</span>
                            </th>
                            <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span style="width: 110px;">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body" style="">
                        @forelse ($categories as $category)
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                <td data-field="OrderID" class="kt-datatable__cell">
                                    <span style="width: 110px;">{{$category->name}}</span>
                                </td>
                                <td data-field="Country" class="kt-datatable__cell">
                                    <span style="width: 110px;">{{ $category->time_of_maturity }}</span>
                                </td>
                                <td data-field="CompanyName" class="kt-datatable__cell">
                                    <span style="width: 110px;">{{ $category->interest }}</span>
                                </td>
                                <td data-field="ShipDate" class="kt-datatable__cell">
                                    <span style="width: 110px;">{{ $category->minimum_withdraw_time }}</span>
                                </td>
                                <td data-field="CompanyName" class="kt-datatable__cell">
                                    <span style="width: 110px;">
                                        <a href="#" style="padding: 0 5px;"><i class="fa fa-angle-down"></i></a>
                                        <a href="#" style="padding: 0 5px;"><i class="fa fa-list-ol"></i></a>
                                        <a href="#" style="padding: 0 5px;"><i class="fa fa-trash"></i></a>
                                    </span>
                                </td>
                            </tr>
                        @empty

                            <div class="container" style="text-align:center">
                                <span> No Recent Deposit Categories Added Yet </span>
                            </div>

                        @endforelse
                    </tbody>
                </table>
                <div class="kt-datatable__pager kt-datatable--paging-loaded">
                    <ul class="kt-datatable__pager-nav" style="display: none;">
                        <li>
                            <a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled">
                                <i class="flaticon2-fast-back"></i>
                            </a>
                        </li>
                        <li>
                            <a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled">
                                <i class="flaticon2-back"></i>
                            </a>
                        </li>
                        <li style=""></li>
                        <li style="display: none;">
                            <input type="text" class="kt-pager-input form-control" title="Page number">
                        </li>
                        <li>
                            <a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a>
                        </li>
                        <li style=""></li>
                        <li>
                            <a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next kt-datatable__pager-link--disabled" data-page="1" disabled="disabled">
                                <i class="flaticon2-next"></i>
                            </a>
                        </li>
                        <li>
                            <a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last kt-datatable__pager-link--disabled" data-page="1" disabled="disabled">
                                <i class="flaticon2-fast-next"></i>
                            </a>
                        </li>
                    </ul>
                    {{-- <div class="kt-datatable__pager-info">
                        <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
                            <select class="selectpicker kt-datatable__pager-size" data-width="60px" data-selected="10" tabindex="-98">
                                <option class="bs-title-option" value=""></option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
                                <div class="filter-option">
                                    <div class="filter-option-inner">
                                        <div class="filter-option-inner-inner">10</div>
                                    </div>
                                </div>
                            </button>
                            <div class="dropdown-menu ">
                                <div class="inner show" role="listbox" id="bs-select-5" tabindex="-1">
                                    <ul class="dropdown-menu inner show" role="presentation">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span class="kt-datatable__pager-detail">Showing 1 - 1 of 1</span>
                    </div> --}}
                </div>
            </div>

                <!--end: Datatable -->
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>

@endsection
