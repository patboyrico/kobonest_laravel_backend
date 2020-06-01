<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Kobonest | @yield('title')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Asap+Condensed:500">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->

		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->

        <!--begin:: Vendor Plugins -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
		<link href="{{ asset('plugins/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/quill/dist/quill.snow.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/@yaireo/tagify/dist/tagify.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/dual-listbox/dist/dual-listbox.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/plugins/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/plugins/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/plugins/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />

        <!--end:: Vendor Plugins -->
        {{-- <link href="{{ asset('css/main.css?version=4.4.0')}}" rel="stylesheet"> --}}
        <link href="{{ asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />


		<!--begin:: Vendor Plugins for custom pages -->
		<link href="{{ asset('plugins/custom/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/@fullcalendar/core/main.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/@fullcalendar/daygrid/main.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/@fullcalendar/list/main.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/@fullcalendar/timegrid/main.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/jstree/dist/themes/default/style.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/jqvmap/dist/jqvmap.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/uppy/dist/uppy.min.css')}}" rel="stylesheet" type="text/css" />

		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset('kobonest_logo.png')}}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="{{ route('user.dashboard') }}">
					<img alt="Logo" src="{{ asset('kobonest_logo.png')}}" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-container  kt-container--fluid ">

							<!-- begin:: Brand -->
							<div class="kt-header__brand " id="kt_header_brand">
								<div class="kt-header__brand-logo">
									<a href="{{route('user.dashboard')}}">
										<img alt="Logo" src="{{ asset('kobonest_logo.png')}}" />
									</a>
								</div>
								<div class="kt-header__brand-nav">
									<div class="dropdown">
										@yield('fund-wallet')
									</div>
								</div>
							</div>

							<!-- end:: Brand -->

							<!-- begin:: Header Topbar -->
							<div class="kt-header__topbar">

								<!--begin: Search -->


								<!--end: Search -->

								<!--begin: Notifications -->
								<div class="kt-header__topbar-item dropdown">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
										<span class="kt-hidden kt-badge kt-badge--danger"></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
										<form>

											<!--begin: Head -->
											<div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
												<h3 class="kt-head__title">
													User Notifications
													&nbsp;
													<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
												</h3>
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
													</li>
												</ul>
											</div>

											<!--end: Head -->
											<div class="tab-content">
												<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
													<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-line-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been received
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-box-1 kt-font-brand"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-chart2 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-image-file kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New file has been uploaded
																</div>
																<div class="kt-notification__item-time">
																	5 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-drop kt-font-info"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New user feedback received
																</div>
																<div class="kt-notification__item-time">
																	8 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart-2 kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	System reboot has been successfully completed
																</div>
																<div class="kt-notification__item-time">
																	12 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-favourite kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been placed
																</div>
																<div class="kt-notification__item-time">
																	15 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item kt-notification__item--read">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-safe kt-font-primary"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Company meeting canceled
																</div>
																<div class="kt-notification__item-time">
																	19 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-psd kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New report has been received
																</div>
																<div class="kt-notification__item-time">
																	23 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-download-1 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Finance report has been generated
																</div>
																<div class="kt-notification__item-time">
																	25 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-security kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer comment recieved
																</div>
																<div class="kt-notification__item-time">
																	2 days ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 days ago
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
													<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-psd kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New report has been received
																</div>
																<div class="kt-notification__item-time">
																	23 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-download-1 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Finance report has been generated
																</div>
																<div class="kt-notification__item-time">
																	25 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-line-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been received
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-box-1 kt-font-brand"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-chart2 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-image-file kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New file has been uploaded
																</div>
																<div class="kt-notification__item-time">
																	5 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-drop kt-font-info"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New user feedback received
																</div>
																<div class="kt-notification__item-time">
																	8 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart-2 kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	System reboot has been successfully completed
																</div>
																<div class="kt-notification__item-time">
																	12 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-favourite kt-font-brand"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been placed
																</div>
																<div class="kt-notification__item-time">
																	15 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item kt-notification__item--read">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-safe kt-font-primary"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Company meeting canceled
																</div>
																<div class="kt-notification__item-time">
																	19 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-psd kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New report has been received
																</div>
																<div class="kt-notification__item-time">
																	23 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-download-1 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Finance report has been generated
																</div>
																<div class="kt-notification__item-time">
																	25 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-security kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer comment recieved
																</div>
																<div class="kt-notification__item-time">
																	2 days ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 days ago
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
													<div class="kt-grid kt-grid--ver" style="min-height: 200px;">
														<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
															<div class="kt-grid__item kt-grid__item--middle kt-align-center">
																All caught up!
																<br>No new notifications.
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<!--end: Notifications -->


								<!--begin: User bar -->
								<div class="kt-header__topbar-item kt-header__topbar-item--user">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
										<span class="kt-header__topbar-username kt-visible-desktop">{{ auth()->user()->first_name }}</span>
										<img alt="Pic" src="{{ asset('avatar.png') }}" />
										<span class="kt-header__topbar-icon kt-bg-brand kt-hidden"><b>S</b></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

										<!--begin: Head -->
										<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
											<div class="kt-user-card__avatar">
												<img class="kt-hidden-" alt="Pic" src="{{ asset('avatar.png') }}" />

												<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
												<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
											</div>
											<div class="kt-user-card__name">
												{{ auth()->user()->full_name }}
											</div>
											<div class="kt-user-card__badge">
												<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
											</div>
										</div>

										<!--end: Head -->

										<!--begin: Navigation -->
										<div class="kt-notification">
											<a href="custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-calendar-3 kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														My Profile
													</div>
													<div class="kt-notification__item-time">
														Account settings and more
													</div>
												</div>
											</a>
											<a href="custom/apps/user/profile-3.html" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-mail kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														My Messages
													</div>
													<div class="kt-notification__item-time">
														Inbox and tasks
													</div>
												</div>
											</a>
											<div class="kt-notification__custom kt-space-between">
                                                <a href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                                <form id="frm-logout" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
											</div>
										</div>

										<!--end: Navigation -->
									</div>
								</div>

								<!--end: User bar -->
							</div>

							<!-- end:: Header Topbar -->
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

							<!-- begin:: Aside -->

                            @yield('sidebar')

							<!-- end:: Aside -->

                            @yield('content')

						</div>
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer kt-grid__item" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__wrapper">
								<div class="kt-footer__copyright">
									2019&nbsp;&copy;&nbsp;<a href="#" target="_blank" class="kt-link">Kobonest</a>
								</div>
								<div class="kt-footer__menu">
									<a href="#" target="_blank" class="kt-link">About</a>
									<a href="#" target="_blank" class="kt-link">Team</a>
									<a href="#" target="_blank" class="kt-link">Contact</a>
								</div>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
				<a href="#" class=""><i class="flaticon2-drop"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
				<a href="https://keenthemes.com/metronic/preview/demo11/builder.html" target="_blank"><i class="flaticon2-gear"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
				<a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
			</li>
		</ul>

		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->


		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->
		<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="kt-chat">
						<div class="kt-portlet kt-portlet--last">
							<div class="kt-portlet__head">
								<div class="kt-chat__head ">
									<div class="kt-chat__left">
										<div class="kt-chat__label">
											<a href="#" class="kt-chat__title">Jason Muller</a>
											<span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
										</div>
									</div>
									<div class="kt-chat__right">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon-more-1"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Messaging
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-group"></i>
															<span class="kt-nav__link-text">New Group</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
															<span class="kt-nav__link-text">Contacts</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-bell-2"></i>
															<span class="kt-nav__link-text">Calls</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-dashboard"></i>
															<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-protected"></i>
															<span class="kt-nav__link-text">Help</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
										<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
											<i class="flaticon2-cross"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
									<div class="kt-chat__messages kt-chat__messages--solid">
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/100_12.jpg" alt="image"> --}}
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												How likely are you to recommend our company<br> to your friends and family?
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/300_21.jpg" alt="image"> --}}
												</span>
											</div>
											<div class="kt-chat__text">
												Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/100_12.jpg" alt="image"> --}}
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok, Understood!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/300_21.jpg" alt="image"> --}}
												</span>
											</div>
											<div class="kt-chat__text">
												You’ll receive notifications for all issues, pull requests!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/100_12.jpg" alt="image"> --}}
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/300_21.jpg" alt="image"> --}}
												</span>
											</div>
											<div class="kt-chat__text">
												You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/100_12.jpg" alt="image"> --}}
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-media kt-media--circle kt-media--sm">
													{{-- <img src="media/users/300_21.jpg" alt="image"> --}}
												</span>
											</div>
											<div class="kt-chat__text">
												Most purchased Business courses during this sale!
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="kt-chat__input">
									<div class="kt-chat__editor">
										<textarea placeholder="Type here..." style="height: 50px"></textarea>
									</div>
									<div class="kt-chat__toolbar">
										<div class="kt_chat__tools">
											<a href="#"><i class="flaticon2-link"></i></a>
											<a href="#"><i class="flaticon2-photograph"></i></a>
											<a href="#"><i class="flaticon2-photo-camera"></i></a>
										</div>
										<div class="kt_chat__actions">
											<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>


			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->

		<!--begin:: Vendor Plugins -->
		<script src="{{ asset('plugins/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/wnumb/wNumb.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/bootstrap-switch.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/dropzone.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/quill/dist/quill.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/@yaireo/tagify/dist/tagify.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/bootstrap-notify.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/jquery-validation.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/dual-listbox/dist/dual-listbox.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/raphael/raphael.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/morris.js/morris.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/plugins/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/js/global/integration/plugins/sweetalert2.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>

        <!--end:: Vendor Plugins -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.steps.min.js')}}"></script>

        @yield('scripts')

		<!--begin:: Vendor Plugins for custom pages -->
		<script src="{{ asset('plugins/custom/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/@fullcalendar/core/main.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/@fullcalendar/daygrid/main.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/@fullcalendar/google-calendar/main.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/@fullcalendar/interaction/main.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/@fullcalendar/list/main.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/@fullcalendar/timegrid/main.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/flot/dist/es5/jquery.flot.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/flot/source/jquery.flot.resize.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/flot/source/jquery.flot.categories.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/flot/source/jquery.flot.pie.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/flot/source/jquery.flot.stack.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/flot/source/jquery.flot.crosshair.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/flot/source/jquery.flot.axislabels.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net/js/jquery.dataTables.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/js/global/integration/plugins/datatables.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jszip/dist/jszip.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/pdfmake/build/pdfmake.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/pdfmake/build/vfs_fonts.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-buttons/js/buttons.colVis.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-buttons/js/buttons.flash.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-buttons/js/buttons.html5.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-buttons/js/buttons.print.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/datatables.net-select/js/dataTables.select.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jstree/dist/jstree.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jqvmap/dist/jquery.vmap.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
		<script src="{{ asset('plugins/custom/uppy/dist/uppy.min.js')}}" type="text/javascript"></script>

		<!--end:: Vendor Plugins for custom pages -->

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="{{ asset('//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM')}}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{ asset('js/pages/dashboard.js')}}" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
