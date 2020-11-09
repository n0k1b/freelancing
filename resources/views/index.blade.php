<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2019 13:31:39 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Women World</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css?{{time()}}">
<link rel="stylesheet" href="{{asset('assets')}}/css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper-with-transparent-header">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				{{-- <div id="logo">
					<a href="index.php"><img src="{{asset('assets')}}/images/logo.jpeg" alt=""></a>
				</div> --}}

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
						<li><a href="{{url('view_all_gig')}}" >Browse Entrepreneur</a></li>
						<li><a href="{{url('browse-blog')}}">Browse Blog</a></li>
			 		    @if (auth()->check())
                         <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                         <li><a href="{{route('logout')}}">Logout</a></li>
                         @else
                         <li><a href="{{url('login')}}">Login</a></li>
			 		    <li><a href="{{url('registration')}}">Registration</a></li>
                         @endif

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

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

<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<div class="intro-banner dark-overlay" data-background-image="{{asset('assets')}}/images/handi.jpg">

	<!-- Transparent Header Spacer -->
	<div class="transparent-header-spacer"></div>

	<div class="container">

		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Hire Women Entrepreneur for Any Work Any Time</strong>
						<br>
						<span>Huge Community of Women Entrepreneur </span>
					</h3>
				</div>
			</div>
		</div>

		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
			<form action="{{url('search_gig')}}" method ="POST">
			@csrf
				<div class="intro-banner-search-form margin-top-95">

				<div id="autocomplete-container"  class="intro-search-field">
						<label  type="text" for ="intro-keywords" class="field-title ripple-effect">What you need done?</label>
						<input  id="autocomplete-input" name="location" class="city" type="text" placeholder="Location">
				</div>


					<!-- Search Field -->
					<div class="intro-search-field">

						<select id="gig_category" name="gig_category" class="selectpicker default" data-size="7" title="All Categories" >


						</select>
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" type="submit">Search</button>
					</div>
				</div>
				</form>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Jobs Posted</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>Tasks Posted</span>
					</li>
					<li>
						<strong class="counter">1,232</strong>
						<span>Freelancers</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Popular Job Categories -->
<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Popular Blog Category</h3>
				</div>
			</div>

           @if(auth()->check())
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/health.jpg">
					<div class="photo-box-content">
						<h3>Health</h3>
						<span>612 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/jewellary.jpg">
					<div class="photo-box-content">
						<h3>Fashion and Beauty</h3>
						<span>113 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/travel.jpg">
					<div class="photo-box-content">
						<h3>Travel</h3>
						<span>186 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/paper_craft.jpg">
					<div class="photo-box-content">
						<h3>Craft</h3>
						<span>298 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/education.jpg">
					<div class="photo-box-content">
						<h3>Career & Education</h3>
						<span>549 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/food.jpeg">
					<div class="photo-box-content">
						<h3>Cooking and Recipes</h3>
						<span>873 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/parenting.jpg">
					<div class="photo-box-content">
						<h3>Parenting and Babycare</h3>
						<span>125 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="{{url('blog/1')}}" class="photo-box small" data-background-image="{{asset('assets')}}/images/abuse.jpeg">
					<div class="photo-box-content">
						<h3>Abuse</h3>
						<span>445 post</span>
					</div>
				</a>
			</div>
			@else

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/health.jpg">
					<div class="photo-box-content">
						<h3>Health</h3>
						<span>612 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/jewellary.jpg">
					<div class="photo-box-content">
						<h3>Fashion and Beauty</h3>
						<span>113 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/travel.jpg">
					<div class="photo-box-content">
						<h3>Travel</h3>
						<span>186 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/paper_craft.jpg">
					<div class="photo-box-content">
						<h3>Craft</h3>
						<span>298 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/education.jpg">
					<div class="photo-box-content">
						<h3>Career & Education</h3>
						<span>549 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/food.jpeg">
					<div class="photo-box-content">
						<h3>Cooking and Recipes</h3>
						<span>873 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/parenting.jpg">
					<div class="photo-box-content">
						<h3>Parenting and Babycare</h3>
						<span>125 post</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="javascript:;" onclick="login_alert()" class="photo-box small" data-background-image="{{asset('assets')}}/images/abuse.jpeg">
					<div class="photo-box-content">
						<h3>Abuse</h3>
						<span>445 post</span>
					</div>
				</a>
			</div>

			@endif


		</div>
	</div>
</div>

<!-- Icon Boxes -->
<div class="section padding-top-65 padding-bottom-65">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-5">
					<h3>How It Works?</h3>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-lock"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Create an Account</h3>
					<p>Create your account with simple registration process</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-legal"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Post a Gig</h3>
					<p>Create your advertisement with your necesary information </p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class=" icon-line-awesome-trophy"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Get Hired</h3>
					<p>Bid job post and get hired</p>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Icon Boxes / End -->





<div class="section padding-top-70 padding-bottom-75">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<div class="counters-container">

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-suitcase"></i>
						<div class="counter-inner">
							<h3><span class="counter">1,586</span></h3>
							<span class="counter-title">Jobs Posted</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-legal"></i>
						<div class="counter-inner">
							<h3><span class="counter">3,543</span></h3>
							<span class="counter-title">Tasks Posted</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-user"></i>
						<div class="counter-inner">
							<h3><span class="counter">2,413</span></h3>
							<span class="counter-title">Active Members</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-trophy"></i>
						<div class="counter-inner">
							<h3><span class="counter">99</span>%</h3>
							<span class="counter-title">Satisfaction Rate</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Counters / End -->


<!-- Footer
================================================== -->
<div id="footer">

	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">

						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>

						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>

							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->

	<!-- Footer Middle Section / End -->

	<!-- Footer Copyrights -->

	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->


<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
@include('layout.page_js')
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() {
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	});
});
</script>


<!-- Google Autocomplete -->
<script>
$(function()
	{
		$.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       		 }
    	});

		get_category();

	});
	function login_alert()
	{
		
		swal({
  title: "Your have to login to see blog post",
 
  icon: "error",
  
 
})
	}
	function search_gig()
	{
		var gig_category_id = $("#gig_category").val();
		var formdata = new FormData();
		formdata.append('gig_category_id',gig_category_id);
		$.ajax({
        processData:false,
        contentType:false,
        type:'post',
        url:"search_gig",
        success:function(data){
			//alert(data);

        }
   		 })

	}
	function get_category()
	  {
		$.ajax({
        processData:false,
        contentType:false,
        type:'post',
        url:"get_category",
        success:function(data){
			//alert(data);
			$("#gig_category").html(data);
        }
   		 })
	  }
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2019 13:31:49 GMT -->
</html>
