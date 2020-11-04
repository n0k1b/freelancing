{{--<?php
  @ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
$user_id = $_SESSION['user_id'];
   include("connection.php");
   $sql_bid = "select * from bid_details where job_given_id = $user_id and status = 0 ";
   $res_bid =mysqli_query($conn,$sql_bid);
   $num_of_bid = mysqli_num_rows($res_bid);

   $sql_gig = "Select * from gig_apply where user_id = $user_id and status = 0";
   $res_gig = mysqli_query($conn,$sql_gig);
   $num_of_gig = mysqli_num_rows($res_gig);


   $sql_bid_accept = "SELECT * from bid_details where user_id =$user_id and bid_accepted = 1 and show_notification =0";
   $res_bid_accept = mysqli_query($conn,$sql_bid_accept);
   $num_of_bid_accept = mysqli_num_rows($res_bid_accept);

  

   $total_notification = $num_of_bid+$num_of_gig+$num_of_bid_accept;


   

//file_put_contents("test.txt",$user_id);

?>--}}

<!doctype html>
<html lang="en">

<head>

<!-- Basic Page Needs
================================================== -->
<title>Freelancer For Female</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/colors/blue.css">

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

						<li><a href="index.php" >Home</a></li>

						<li><a href="main_page_job.php?category=all&location=all" >Browse Job</a></li>

						<li><a href="main_page_gig.php?category=all&location=all">Browse Gig</a></li>

						<li><a href="post_job.php">Post Job</a></li>
			 		     <li><a href="create_gig.php">Create Gig</a></li>
			 		     <li><a href="dashboard.php">Dashboard</a></li>

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
						<div class="custom_notification">
							<a href="see_notification.php"><i class="icon-feather-bell"></i><span><?php echo $total_notification=1 ?></span></a>
						</div>

						<!-- Dropdown -->
						
					</div>
					
					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="{{asset('assets')}}/images/user-avatar-small-03.jpg" alt=""></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><img src="{{asset('assets')}}/images/user-avatar-small-02.jpg" alt=""></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="{{asset('assets')}}/images/user-avatar-placeholder.png" alt=""></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

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