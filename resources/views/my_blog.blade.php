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
	<div class="row" id="posts">

	</div>
</div>

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Add Note</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">

				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Do Not Forget 😎</h3>
				</div>

				<!-- Form -->
				<form method="post" id="add-note">

					<select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Low Priority</option>
						<option>Medium Priority</option>
						<option>High Priority</option>
					</select>

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>

				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Apply for a job popup / End -->


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

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->

<script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log("Jquery running!");
        readPost(0,2);
    })
    var scroll = 0;
    var total = 0
    $(window).scroll(function() {
        if($(window).scrollTop() == $(document).height() - $(window).height()) {
            total = 2+scroll+total;
            readPost(total,2);
        }
    });


    function readPost(total,take) {
        $.ajax({
            processData:false,
            contentType:false,
            url:"{{url('read-blog-post')}}",
            type:'get',
            success: function (response) {
                $("#posts").html(response)
            },
        });
    }

    function delete_post(id) {
        $.ajax({
            processData:false,
            contentType:false,
            url:'delete-blog-post/'+id,
            type:'get',
            success: function (response) {
                readPost()
            },
        });
    }

    // function readCategory(total,take) {
    //     $.ajax({
    //         processData:false,
    //         contentType:false,
    //         url:'get_category',
    //         type:'get',
    //         success: function (response) {
    //             console.log(response);
    //         },
    //     });
    // }

    $("#creatingPost").submit(function (event) {
        event.preventDefault();
        data = new FormData();
        data.append('category',$("#category").val());
        data.append('text',$("#text").val());
        data.append('upload',$("#upload")[0].files[0]);
        $.ajax({
            processData:false,
            contentType:false,
            url:$("#creatingPost").attr('action'),
            type:$("#creatingPost").attr('method'),
            data:data,
            success: function (response) {
                alert('Success fully created your post');
                $("#text").val('')
                $("#upload").val('')
                $(".uploadButton-file-name").text('')
            },
        });
    });
    </script>

</body>
</html>
