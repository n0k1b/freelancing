<!doctype html>
<html lang="en">

<head>

<!-- Basic Page Needs
================================================== -->
<title>Women's world</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('assets') }}\bootstrap\bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css?{{time()}}">
<link rel="stylesheet" href="{{asset('assets')}}/css/colors/blue.css">
<style>
#sslczPayBtn
    {
    position: relative;
    background: #2a41e8 !important;
    border: 0 none;
    color: #fff;
    padding: 8px 20px 8px 70px;
    border-radius: 4px;
    height: 32px !important;
    cursor: pointer;
    text-transform: default !important;
    font-size: 12px !important;
    width: 155px !important;
    outline: 0;
    overflow: hidden;
    }
</style>

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="{{asset('assets')}}/images/logo.jpeg" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="{{url('/')}}" >Home</a></li>

						<li><a href="{{url('view_all_gig')}}" >Browse Entrepreneur</a></li>

						<li><a href="{{url('browse-blog')}}">Browse Blog</a></li>
						
						@if(auth()->check())
			 		     <li><a href="{{url('dashboard')}}">Dashboard</a></li>
						  <li><a href="{{route('logout')}}">Logout</a></li>
						  @else
						  <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Registration</a></li>
						@endif

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				<div class="header-widget hide-on-mobile">
					
					<!-- Notifications -->
					<div class="header-notifications">

						<!-- Trigger -->
						

						<!-- Dropdown -->
						
					</div>
					
					<!-- Messages -->
					

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>