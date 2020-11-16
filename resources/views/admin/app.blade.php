<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
<link rel="stylesheet" href="{{ asset('assets') }}/css/colors/blue.css">
<link rel="stylesheet" href="{{ asset('assets') }}/bootstrap/bootstrap.min.css">
{{-- <link rel="stylesheet" href="{{ asset('resources') }}/css/app.css"> --}}

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="index-2.html"><img src="{{ asset('assets') }}/images/logo.png" alt=""></a>
				</div>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="{{route('logout')}}">Logout</a></li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>

				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="@yield('blog-category')"><a href="{{url('admin')}}"><i class="icon-material-outline-dashboard"></i>Blog Categories</a></li>
							<li class="@yield('gig-category')"><a href="{{url('admin/gig-categories')}}"><i class="icon-material-outline-dashboard"></i>Gig Categories</a></li>
							<li class="@yield('post-report')"><a href="{{url('admin/blog-report')}}"><i class="icon-material-outline-dashboard"></i>Blog Reports</a></li>
							<li class="@yield('user-list')"><a href="{{url('admin/user-list')}}"><i class="icon-material-outline-dashboard"></i>Users List</a></li>
							{{-- <li class="@yield('active')"><a href="{{url('admin/comment-report')}}"><i class="icon-material-outline-dashboard"></i>Comment Reports</a></li> --}}
						</ul>
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
        @yield('body')
		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}\bootstrap\popper.min.js"></script>
<script src="{{asset('assets')}}\bootstrap\bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery-migrate-3.0.0.min.js"></script>
<script src="{{ asset('assets') }}/js/mmenu.min.js"></script>
<script src="{{ asset('assets') }}/js/tippy.all.min.js"></script>
<script src="{{ asset('assets') }}/js/simplebar.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap-slider.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets') }}/js/snackbar.js"></script>
<script src="{{ asset('assets') }}/js/clipboard.min.js"></script>
<script src="{{ asset('assets') }}/js/counterup.min.js"></script>
<script src="{{ asset('assets') }}/js/magnific-popup.min.js"></script>
<script src="{{ asset('assets') }}/js/slick.min.js"></script>
<script src="{{ asset('assets') }}/js/custom.js"></script>

@yield('js')

</body>
</html>
