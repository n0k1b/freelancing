<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Women's worlds</title>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets') }}\bootstrap\bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/colors/blue.css">
</head>
<body class="gray">

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

                <li><a href="{{url('browse-blog') }}">Browse Blog</a></li>
                      <li><a href="{{url('dashboard')}}">Dashboard</a></li>

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
    <div class="clearfix"></div>
    <!-- Header Container / End -->


@yield('body')


    <!-- Spacer -->
    <div class="padding-top-40"></div>
    <!-- Spacer -->

    {{-- <div id="footer">

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
                                        <img src="{{ asset('assets') }}/images/logo2.png" alt="">
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
        <div class="footer-middle-section">
            <div class="container">
                <div class="row">

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>For Candidates</h3>
                            <ul>
                                <li><a href="#"><span>Browse Jobs</span></a></li>
                                <li><a href="#"><span>Add Resume</span></a></li>
                                <li><a href="#"><span>Job Alerts</span></a></li>
                                <li><a href="#"><span>My Bookmarks</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>For Employers</h3>
                            <ul>
                                <li><a href="#"><span>Browse Candidates</span></a></li>
                                <li><a href="#"><span>Post a Job</span></a></li>
                                <li><a href="#"><span>Post a Task</span></a></li>
                                <li><a href="#"><span>Plans & Pricing</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>Helpful Links</h3>
                            <ul>
                                <li><a href="#"><span>Contact</span></a></li>
                                <li><a href="#"><span>Privacy Policy</span></a></li>
                                <li><a href="#"><span>Terms of Use</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>Account</h3>
                            <ul>
                                <li><a href="#"><span>Log In</span></a></li>
                                <li><a href="#"><span>My Account</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
                        <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                        <form action="#" method="get" class="newsletter">
                            <input type="text" name="fname" placeholder="Enter your email address">
                            <button type="submit"><i class="icon-feather-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Middle Section / End -->

        <!-- Footer Copyrights -->
        <div class="footer-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        © 2019 <strong>Hireo</strong>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyrights / End -->

    </div> --}}
    <!-- Footer / End -->

    </div>
    <!-- Wrapper / End -->


    <!-- Scripts
================================================== -->
<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
{{-- <script src="{{asset('assets')}}\bootstrap\jquery-3.5.1.slim.min.js"></script> --}}
<script src="{{asset('assets')}}/js/jquery-migrate-3.0.0.min.js"></script>
<script src="{{asset('assets')}}/js/mmenu.min.js"></script>
<script src="{{asset('assets')}}/js/tippy.all.min.js"></script>
<script src="{{asset('assets')}}/js/simplebar.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap-slider.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets')}}/js/snackbar.js"></script>
<script src="{{asset('assets')}}/js/clipboard.min.js"></script>
<script src="{{asset('assets')}}/js/counterup.min.js"></script>
<script src="{{asset('assets')}}/js/magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/slick.min.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>

<script src="{{asset('assets')}}\bootstrap\popper.min.js"></script>
<script src="{{asset('assets')}}\bootstrap\bootstrap.min.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
// $('#snackbar-user-status label').click(function() {
// 	Snackbar.show({
// 		text: 'Your status has been changed!',
// 		pos: 'bottom-center',
// 		showAction: false,
// 		actionText: "Dismiss",
// 		duration: 3000,
// 		textColor: '#fff',
// 		backgroundColor: '#383838'
// 	});
// });


</script>
@yield('page-js')
</body>
</html>
