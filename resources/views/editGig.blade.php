@include('layout.app')
	<div class="clearfix"></div>
	<!-- Header Container / End -->


	<!-- Dashboard Container -->
	<div class="dashboard-container">

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

	<!-- Dashboard Sidebar
		================================================== -->

		<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
		================================================== -->
		<div class="dashboard-content-container" data-simplebar>
			<div class="dashboard-content-inner" >

				<!-- Dashboard Headline -->
				<div class="dashboard-headline">
					<h3>Post a Gig</h3>

					<!-- Breadcrumbs -->

				</div>

				<!-- Row -->
				<div class="row">

                    <form action="{{url('update-gig')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <!-- Dashboard Box -->
					<div class="col-xl-12">
						<div class="dashboard-box margin-top-0">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-feather-folder-plus"></i> Gig Update Form</h3>
							</div>

							<div class="content with-padding padding-bottom-10">
								<div class="row">
                                    <input type="hidden" name="id" value="{{$gig->id}}">

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Title</h5>
											<input name="gig_title" type="text" class="with-border" value="{{$gig->title}}">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Base Price</h5>
											<div class="row">
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input name="base_price_min" class="with-border" type="text" placeholder="Min" value="{{$gig->min_price}}">
														<i class="currency">BDT</i>
													</div>
												</div>
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input name="base_price_max" class="with-border" type="text" placeholder="Max" value="{{$gig->max_price}}">
														<i class="currency">BDT</i>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Minimum Duration</h5>
											<div class="row">
												<div class="col-xl-6">
													<div class="input-with-icon">
														<input name="duration" class="with-border" type="text" placeholder="Minimum Duration" value="{{$gig->minimum_duration}}">
														<i class="currency">Days</i>
													</div>
												</div>

											</div>
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Gig Description</h5>
											<textarea name='gig_description' cols="30" rows="5" class="with-border">{{$gig->description}}</textarea>
											<div class="uploadButton margin-top-30">
												<input id="upload" class="uploadButton-input" type="file" accept="image/*, application/pdf" name="upload"/>
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">{{$gig->image}}</span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12">
						<button type="submit" class="button ripple-effect big margin-top-30">Update</button>
					</div>
                    </form>

				</div>
				<!-- Row / End -->

				<!-- Footer -->
				<div class="dashboard-footer-spacer"></div>
				<div class="small-footer margin-top-15">

					<ul class="footer-social-links">
						<li>
							<a href="#" title="Facebook" data-tippy-placement="top">
								<i class="icon-brand-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Twitter" data-tippy-placement="top">
								<i class="icon-brand-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Google Plus" data-tippy-placement="top">
								<i class="icon-brand-google-plus-g"></i>
							</a>
						</li>
						<li>
							<a href="#" title="LinkedIn" data-tippy-placement="top">
								<i class="icon-brand-linkedin-in"></i>
							</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<!-- Footer / End -->

			</div>
		</div>
		<!-- Dashboard Content / End -->

	</div>
	<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts


	================================================== -->

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">

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

  </script>

@include('layout.page_js');
	<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
	<script>
	$(function()
	{
		$.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       		 }
    	});



	});
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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
			datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

			layout: {
				padding: 10,
			},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						borderDash: [6, 10],
						color: "#d8d8d8",
						lineWidth: 1,
					},
				}],
				xAxes: [{
					scaleLabel: { display: false },
					gridLines:  { display: false },
				}],
			},

			tooltips: {
				backgroundColor: '#333',
				titleFontSize: 13,
				titleFontColor: '#fff',
				bodyFontColor: '#fff',
				bodyFontSize: 13,
				displayColors: false,
				xPadding: 10,
				yPadding: 10,
				intersect: false
			}
		},


	});

</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		var options = {
			types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		};

		var input = document.getElementById('autocomplete-input');
		var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
			setTimeout(function(){
				$(".pac-container").prependTo("#autocomplete-container");
			}, 300);
		}
	}
</script>
</body>

</html>
