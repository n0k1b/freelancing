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
    <script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
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
        <div class="left-side">
            <!-- Logo -->
            <div id="logo">
                <a href="index.php"><img src="{{asset('assets')}}/images/logo.jpeg" alt=""></a>
            </div>
        </div>
        <!-- Left Side Content -->
        <div class="right-side">
            <!-- Main Navigation -->
            <nav id="navigation">
                <ul id="responsive">

                    <li><a href="{{url('/')}}" >Home</a></li>
                    <li><a href="{{url('view_all_gig')}}" >Browse Entrepreneur</a></li>
                    <li><a href="{{url('browse-blog') }}">Browse Blog</a></li>

                    @if (auth()->check())
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

@yield('page-js')
</body>
</html>
