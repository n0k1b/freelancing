@include('layout.app')
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

                    @include("layout.dashboard_sidebar");

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

        <!-- Post Content -->
        <div class="container padding-top-40">
            <form method="POST" action="{{url('user/update-blog-post')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
                <textarea class="with-border m-0" name="post">{{$post->post}}</textarea>
                <div class="uploadButton margin-top-10 align-items-center">
                    <input class="uploadButton-input" type="file" id="upload" name="image"/>
                    <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                    <span class="uploadButton-file-name">{{$post->image}}</span>
                    <button type="submit" class="button ripple-effect big"><i class="icon-feather-plus"></i>Update Post</button>
                </div>
            </form>
        </div>

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
</body>
</html>
